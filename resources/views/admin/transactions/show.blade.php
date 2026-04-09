@extends('layouts.admin.master')

@section('content')
<div class="container-xxl grow container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Transaction Details</h5>
            <a href="{{ route('admin.transactions.index') }}" class="btn btn-sm btn-label-primary">Back</a>
        </div>
        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-4"><h6>Order #</h6><p>{{ $transaction->order_number }}</p></div>
                <div class="col-md-4"><h6>User</h6><p>{{ optional($transaction->user)->name }} ({{ optional($transaction->user)->email }})</p></div>
                <div class="col-md-4"><h6>Plan Sold</h6><p>{{ optional($transaction->hosting)->title }} - {{ optional($transaction->hostingPlan)->title }}</p></div>
                <div class="col-md-3"><h6>Billing</h6><p>{{ ucfirst($transaction->billing_cycle) }}</p></div>
                <div class="col-md-3"><h6>Status</h6><p>{{ ucfirst($transaction->status) }}</p></div>
                <div class="col-md-3"><h6>Payment Status</h6><p>{{ $transaction->payment_status ?: 'N/A' }}</p></div>
                <div class="col-md-3"><h6>Amount</h6><p>${{ number_format((float) $transaction->amount, 2) }} {{ strtoupper($transaction->currency) }}</p></div>
                <div class="col-md-6"><h6>Stripe Customer</h6><p>{{ $transaction->stripe_customer_id ?: 'N/A' }}</p></div>
                <div class="col-md-6"><h6>Stripe Subscription</h6><p>{{ $transaction->stripe_subscription_id ?: 'N/A' }}</p></div>
                <div class="col-md-6"><h6>Stripe Payment Intent</h6><p>{{ $transaction->stripe_payment_intent_id ?: 'N/A' }}</p></div>
                <div class="col-md-6"><h6>Stripe Invoice</h6><p>{{ $transaction->stripe_invoice_id ?: 'N/A' }}</p></div>
                <div class="col-md-4"><h6>Starts At</h6><p>{{ optional($transaction->starts_at)->format('d M Y h:i A') ?: 'N/A' }}</p></div>
                <div class="col-md-4"><h6>Renews At</h6><p>{{ optional($transaction->renews_at)->format('d M Y h:i A') ?: 'N/A' }}</p></div>
                <div class="col-md-4"><h6>Created At</h6><p>{{ $transaction->created_at->format('d M Y h:i A') }}</p></div>
            </div>
        </div>
    </div>
</div>
@endsection
