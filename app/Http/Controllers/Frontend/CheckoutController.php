<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HostingPlan;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Stripe\Customer;
use Stripe\Exception\InvalidRequestException;
use Stripe\PaymentMethod;
use Stripe\Price as StripePrice;
use Stripe\Product;
use Stripe\Stripe;
use Stripe\Subscription;

class CheckoutController extends Controller
{
    public function show(HostingPlan $plan): View
    {
        $plan->load('hosting');

        if (! $plan->is_active || ! optional($plan->hosting)->is_active) {
            abort(404);
        }

        $annualDiscount = (float) ($plan->discount_percentage_annual ?? 0);
        $monthlyTotal = (float) $plan->amount_per_month;
        $annualTotal = $monthlyTotal * 12;
        $annualDiscountedTotal = $annualDiscount > 0
            ? $annualTotal * ((100 - $annualDiscount) / 100)
            : $annualTotal;

        return view('frontend.checkout.show', [
            'plan' => $plan,
            'monthlyTotal' => $monthlyTotal,
            'annualTotal' => $annualTotal,
            'annualDiscountedTotal' => $annualDiscountedTotal,
            'annualDiscount' => $annualDiscount,
            'stripePublishableKey' => (string) config('services.stripe.key'),
        ]);
    }

    public function process(Request $request, HostingPlan $plan): RedirectResponse
    {
        $request->validate([
            'billing_cycle' => ['required', 'in:monthly,annual'],
            'billing_name' => ['required', 'string', 'max:120'],
            'billing_email' => ['required', 'email', 'max:150'],
            'payment_method_id' => ['required', 'string'],
        ]);

        $plan->load('hosting');

        if (! $plan->is_active || ! optional($plan->hosting)->is_active) {
            return back()->withErrors(['plan' => 'This plan is no longer available.']);
        }

        $annualDiscount = (float) ($plan->discount_percentage_annual ?? 0);
        $monthlyTotal = (float) $plan->amount_per_month;
        $annualTotal = $monthlyTotal * 12;
        $annualDiscountedTotal = $annualDiscount > 0
            ? $annualTotal * ((100 - $annualDiscount) / 100)
            : $annualTotal;

        $billingCycle = $request->input('billing_cycle');
        $total = $billingCycle === 'annual' ? $annualDiscountedTotal : $monthlyTotal;

        $orderNumber = 'ORD-' . now()->format('YmdHis') . '-' . random_int(100, 999);

        try {
            if (! config('services.stripe.secret')) {
                return back()->with('error', 'Stripe secret key is missing. Please configure STRIPE_SECRET in environment settings.');
            }

            Stripe::setApiKey((string) config('services.stripe.secret'));

            $customer = $this->getOrCreateStripeCustomer(
                $request->input('billing_email'),
                $request->input('billing_name')
            );

            $paymentMethodId = $request->input('payment_method_id');

            $paymentMethod = PaymentMethod::retrieve($paymentMethodId);
            try {
                $paymentMethod->attach([
                    'customer' => $customer->id,
                ]);
            } catch (InvalidRequestException $exception) {
                // If the method is already attached to this customer, continue.
                $errorMessage = strtolower($exception->getMessage());
                if (! str_contains($errorMessage, 'already attached')) {
                    throw $exception;
                }
            }

            Customer::update($customer->id, [
                'invoice_settings' => [
                    'default_payment_method' => $paymentMethodId,
                ],
            ]);

            $priceId = $this->resolveRecurringPriceId($plan, $billingCycle, $total);

            $subscription = Subscription::create([
                'customer' => $customer->id,
                'items' => [
                    ['price' => $priceId],
                ],
                'default_payment_method' => $paymentMethodId,
                'payment_behavior' => 'error_if_incomplete',
                'collection_method' => 'charge_automatically',
                'metadata' => [
                    'order_number' => $orderNumber,
                    'plan_id' => (string) $plan->id,
                    'billing_cycle' => $billingCycle,
                    'user_id' => (string) auth()->id(),
                ],
                'expand' => ['latest_invoice.payment_intent'],
            ]);

            $paymentIntent = optional(optional($subscription->latest_invoice)->payment_intent);

            Transaction::create([
                'user_id' => (int) auth()->id(),
                'hosting_plan_id' => (int) $plan->id,
                'hosting_id' => (int) ($plan->hosting_id ?? 0) ?: null,
                'order_number' => $orderNumber,
                'stripe_customer_id' => $customer->id,
                'stripe_subscription_id' => $subscription->id,
                'stripe_payment_intent_id' => $paymentIntent->id ?? null,
                'stripe_invoice_id' => optional($subscription->latest_invoice)->id,
                'amount' => number_format($total, 2, '.', ''),
                'currency' => 'usd',
                'billing_cycle' => $billingCycle,
                'status' => $subscription->status === 'active' ? 'active' : 'pending',
                'payment_status' => $paymentIntent->status ?? null,
                'payment_method' => 'card',
                'starts_at' => now(),
                'renews_at' => $billingCycle === 'annual' ? now()->addYear() : now()->addMonth(),
                'meta' => [
                    'stripe_status' => $subscription->status,
                    'plan_title' => $plan->title,
                    'hosting_title' => optional($plan->hosting)->title,
                ],
            ]);

            return redirect()->route('account.orders')->with('success', 'Payment successful. Subscription is active and auto-renew enabled.');
        } catch (\Throwable $exception) {
            Log::error('Stripe subscription checkout failed', [
                'plan_id' => $plan->id,
                'error' => $exception->getMessage(),
            ]);

            return back()->with('error', 'Payment failed: ' . $exception->getMessage());
        }
    }

    public function success(Request $request, HostingPlan $plan): RedirectResponse
    {
        return redirect()->route('checkout.show', $plan);
    }

    public function cancel(HostingPlan $plan): RedirectResponse
    {
        return redirect()->route('checkout.show', $plan)->with('info', 'Checkout canceled.');
    }

    private function getOrCreateStripeCustomer(string $email, string $name)
    {
        $existing = Customer::all([
            'email' => $email,
            'limit' => 1,
        ]);

        if (! empty($existing->data)) {
            return $existing->data[0];
        }

        return Customer::create([
            'email' => $email,
            'name' => $name,
        ]);
    }

    private function resolveRecurringPriceId(HostingPlan $plan, string $billingCycle, float $amount): string
    {
        $priceColumn = $billingCycle === 'annual' ? 'stripe_annual_price_id' : 'stripe_monthly_price_id';
        $interval = $billingCycle === 'annual' ? 'year' : 'month';
        $unitAmount = (int) round($amount * 100);

        if (! $plan->stripe_product_id) {
            $product = Product::create([
                'name' => optional($plan->hosting)->title . ' - ' . $plan->title,
                'metadata' => [
                    'plan_id' => (string) $plan->id,
                    'hosting_id' => (string) $plan->hosting_id,
                ],
            ]);

            $plan->stripe_product_id = $product->id;
            $plan->save();
        }

        $existingPriceId = $plan->{$priceColumn};
        if ($existingPriceId) {
            try {
                $existingPrice = StripePrice::retrieve($existingPriceId);
                if ((int) $existingPrice->unit_amount === $unitAmount && ($existingPrice->recurring->interval ?? null) === $interval) {
                    return $existingPriceId;
                }
            } catch (\Throwable $exception) {
                Log::warning('Stripe price retrieve failed, recreating.', [
                    'price_id' => $existingPriceId,
                    'error' => $exception->getMessage(),
                ]);
            }
        }

        $price = StripePrice::create([
            'unit_amount' => $unitAmount,
            'currency' => 'usd',
            'recurring' => [
                'interval' => $interval,
                'interval_count' => 1,
            ],
            'product' => $plan->stripe_product_id,
            'metadata' => [
                'plan_id' => (string) $plan->id,
                'billing_cycle' => $billingCycle,
            ],
        ]);

        $plan->{$priceColumn} = $price->id;
        $plan->save();

        return $price->id;
    }
}
