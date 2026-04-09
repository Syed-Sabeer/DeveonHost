@extends('layouts.frontend.master')

@section('css')
<style>
.checkout-page {
    padding: 120px 0;
    background: radial-gradient(circle at top left, #eaf2ff 0%, #ffffff 55%);
}
.checkout-card {
    background: #fff;
    border: 1px solid #dfe9ff;
    border-radius: 16px;
    box-shadow: 0 16px 40px rgba(16, 46, 120, 0.1);
    padding: 28px;
}
.checkout-summary {
    background: #f5f8ff;
    border-radius: 12px;
    padding: 20px;
}
.cycle-card {
    border: 1px solid #dce6ff;
    border-radius: 10px;
    padding: 12px 14px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
#card-element {
    border: 1px solid #dce6ff;
    border-radius: 10px;
    background: #fff;
    padding: 14px 12px;
}
#card-errors {
    font-size: 13px;
}
</style>
@endsection

@section('content')
<main class="main-area fix checkout-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="checkout-card">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h2 class="title mb-2">Secure Checkout</h2>
                            <p class="text-muted mb-4">Complete your order for {{ $plan->hosting->title }} - {{ $plan->title }}.</p>

                            @if($errors->any())
                                <div class="alert alert-danger">{{ $errors->first() }}</div>
                            @endif

                            <form id="stripe-checkout-form" action="{{ route('checkout.process', $plan) }}" method="POST">
                                @csrf
                                <input type="hidden" name="payment_method_id" id="payment_method_id">
                                <div class="mb-3">
                                    <label class="form-label">Billing Name</label>
                                    <input type="text" name="billing_name" value="{{ old('billing_name', auth()->user()->name) }}" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Billing Email</label>
                                    <input type="email" name="billing_email" value="{{ old('billing_email', auth()->user()->email) }}" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Billing Cycle</label>
                                    <label class="cycle-card mb-2">
                                        <span>
                                            <input type="radio" name="billing_cycle" value="monthly" {{ old('billing_cycle', 'monthly') === 'monthly' ? 'checked' : '' }}>
                                            Monthly
                                        </span>
                                        <strong>${{ number_format($monthlyTotal, 2) }}</strong>
                                    </label>
                                    <label class="cycle-card">
                                        <span>
                                            <input type="radio" name="billing_cycle" value="annual" {{ old('billing_cycle') === 'annual' ? 'checked' : '' }}>
                                            Annual
                                        </span>
                                        <strong>${{ number_format($annualDiscountedTotal, 2) }}</strong>
                                    </label>
                                    @if($annualDiscount > 0)
                                        <small class="text-success">Annual billing includes {{ number_format($annualDiscount, 0) }}% savings.</small>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Card Details</label>
                                    <div id="card-element"></div>
                                    <div id="card-errors" class="text-danger mt-2"></div>
                                </div>
                                <button type="submit" id="pay-button" class="tg-btn">Pay Securely with Stripe</button>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-summary">
                                <h4 class="mb-3">Order Summary</h4>
                                <p class="mb-2"><strong>Hosting:</strong> {{ $plan->hosting->title }}</p>
                                <p class="mb-2"><strong>Plan:</strong> {{ $plan->title }}</p>
                                <p class="mb-2"><strong>Monthly:</strong> ${{ number_format($monthlyTotal, 2) }}</p>
                                <p class="mb-2"><strong>Annual:</strong> ${{ number_format($annualDiscountedTotal, 2) }}</p>
                                <hr>
                                <h6 class="mb-3">Included Features</h6>
                                <ul class="list-wrap">
                                    @foreach(($plan->features ?? []) as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script>
    (function () {
        var key = @json($stripePublishableKey);
        if (!key) {
            var cardErrors = document.getElementById('card-errors');
            if (cardErrors) {
                cardErrors.textContent = 'Stripe publishable key is missing. Please contact support.';
            }
            return;
        }

        var stripe = Stripe(key);
        var elements = stripe.elements();
        var card = elements.create('card', {
            hidePostalCode: true,
        });
        card.mount('#card-element');

        var form = document.getElementById('stripe-checkout-form');
        var payButton = document.getElementById('pay-button');
        var cardErrors = document.getElementById('card-errors');

        card.on('change', function (event) {
            cardErrors.textContent = event.error ? event.error.message : '';
        });

        form.addEventListener('submit', async function (event) {
            event.preventDefault();

            if (payButton) {
                payButton.disabled = true;
                payButton.textContent = 'Processing...';
            }

            var billingName = form.querySelector('input[name="billing_name"]').value;
            var billingEmail = form.querySelector('input[name="billing_email"]').value;

            var result = await stripe.createPaymentMethod({
                type: 'card',
                card: card,
                billing_details: {
                    name: billingName,
                    email: billingEmail,
                },
            });

            if (result.error) {
                cardErrors.textContent = result.error.message;
                if (payButton) {
                    payButton.disabled = false;
                    payButton.textContent = 'Pay Securely with Stripe';
                }
                return;
            }

            document.getElementById('payment_method_id').value = result.paymentMethod.id;
            form.submit();
        });
    })();
</script>
@endsection
