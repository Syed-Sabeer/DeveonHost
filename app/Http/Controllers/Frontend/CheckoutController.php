<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HostingPlan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Stripe\Checkout\Session;
use Stripe\Stripe;

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
        ]);
    }

    public function process(Request $request, HostingPlan $plan): RedirectResponse
    {
        $request->validate([
            'billing_cycle' => ['required', 'in:monthly,annual'],
            'billing_name' => ['required', 'string', 'max:120'],
            'billing_email' => ['required', 'email', 'max:150'],
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

        $pendingOrder = [
            'id' => 'ORD-' . now()->format('YmdHis') . '-' . random_int(100, 999),
            'hosting' => optional($plan->hosting)->title,
            'plan' => $plan->title,
            'billing_cycle' => ucfirst($billingCycle),
            'amount' => number_format($total, 2, '.', ''),
            'status' => 'Active',
            'created_at' => now()->format('Y-m-d H:i'),
        ];

        try {
            Stripe::setApiKey((string) config('services.stripe.secret'));

            $session = Session::create([
                'mode' => 'payment',
                'customer_email' => $request->input('billing_email'),
                'line_items' => [[
                    'quantity' => 1,
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => (int) round($total * 100),
                        'product_data' => [
                            'name' => optional($plan->hosting)->title . ' - ' . $plan->title,
                            'description' => 'Billing cycle: ' . ucfirst($billingCycle),
                        ],
                    ],
                ]],
                'metadata' => [
                    'plan_id' => (string) $plan->id,
                    'billing_cycle' => $billingCycle,
                    'order_id' => $pendingOrder['id'],
                ],
                'success_url' => route('checkout.success', $plan) . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.cancel', $plan),
            ]);

            session([
                'pending_checkout' => [
                    'plan_id' => $plan->id,
                    'order' => $pendingOrder,
                ],
            ]);

            return redirect()->away($session->url);
        } catch (\Throwable $exception) {
            Log::error('Stripe checkout session creation failed', [
                'plan_id' => $plan->id,
                'error' => $exception->getMessage(),
            ]);

            return back()->with('error', 'Unable to start Stripe checkout right now. Please try again in a moment.');
        }
    }

    public function success(Request $request, HostingPlan $plan): RedirectResponse
    {
        $sessionId = $request->query('session_id');

        if (! $sessionId) {
            return redirect()->route('checkout.show', $plan)->with('error', 'Missing Stripe session information.');
        }

        try {
            Stripe::setApiKey((string) config('services.stripe.secret'));
            $session = Session::retrieve($sessionId);

            if (($session->payment_status ?? null) !== 'paid') {
                return redirect()->route('checkout.show', $plan)->with('warning', 'Payment was not completed. Please try again.');
            }

            $pending = session('pending_checkout');
            if (! is_array($pending) || (int) ($pending['plan_id'] ?? 0) !== (int) $plan->id) {
                return redirect()->route('account.orders')->with('warning', 'Payment succeeded, but order summary is not available in this session.');
            }

            $order = $pending['order'];
            $order['stripe_session_id'] = $sessionId;

            $orders = collect(session('customer_orders', []));
            $orders->prepend($order);

            session([
                'customer_orders' => $orders->take(25)->values()->all(),
            ]);
            session()->forget('pending_checkout');

            return redirect()->route('account.orders')->with('success', 'Payment successful. Your order is now active.');
        } catch (\Throwable $exception) {
            Log::error('Stripe checkout success verification failed', [
                'plan_id' => $plan->id,
                'session_id' => $sessionId,
                'error' => $exception->getMessage(),
            ]);

            return redirect()->route('checkout.show', $plan)->with('error', 'Payment verification failed. Please contact support with your payment reference.');
        }
    }

    public function cancel(HostingPlan $plan): RedirectResponse
    {
        return redirect()->route('checkout.show', $plan)->with('info', 'Checkout was canceled. You can complete it anytime.');
    }
}
