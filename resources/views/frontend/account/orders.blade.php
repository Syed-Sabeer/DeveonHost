@extends('layouts.frontend.master')

@section('css')
<style>
.account-page {
    padding: 120px 0;
    background: linear-gradient(180deg, #f4f8ff 0%, #ffffff 42%);
}
.account__nav {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.account__nav .tg-btn.active {
    background: #0d5ef4;
    border-color: #0d5ef4;
    color: #fff;
}
.account-card {
    background: #fff;
    border-radius: 14px;
    border: 1px solid #e6ecff;
    box-shadow: 0 12px 35px rgba(20, 44, 120, 0.08);
    padding: 24px;
}
</style>
@endsection

@section('content')
<main class="main-area fix account-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-25">
                <h2 class="title mb-2">My Orders</h2>
                <p class="text-muted mb-0">Track your active hosting services and recent purchases.</p>
            </div>
        </div>

        @include('frontend.account.partials.nav')

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="account-card">
            @if($orders->isEmpty())
                <p class="text-muted mb-0">No orders found yet. Visit hosting plans and click Get Started.</p>
            @else
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Service</th>
                                <th>Billing</th>
                                <th>Status</th>
                                <th>Payment</th>
                                <th>Total</th>
                                <th>Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->order_number }}</td>
                                    <td>{{ optional($order->hosting)->title }} - {{ optional($order->hostingPlan)->title }}</td>
                                    <td>{{ ucfirst($order->billing_cycle) }}</td>
                                    <td><span class="badge {{ $order->status === 'active' ? 'bg-success' : 'bg-secondary' }}">{{ ucfirst($order->status) }}</span></td>
                                    <td>{{ $order->payment_status ?: 'N/A' }}</td>
                                    <td>${{ number_format((float) $order->amount, 2) }}</td>
                                    <td>{{ $order->created_at->format('d M Y h:i A') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</main>
@endsection
