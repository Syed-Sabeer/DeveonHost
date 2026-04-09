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
    height: 100%;
}
.account-stat {
    font-size: 28px;
    line-height: 1;
    font-weight: 700;
    color: #0f2f79;
}
.account-muted {
    color: #6f7893;
}
</style>
@endsection

@section('content')
<main class="main-area fix account-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-25">
                <h2 class="title mb-2">Welcome back, {{ $user->name }}</h2>
                <p class="account-muted mb-0">Manage your profile, security, and hosting orders from one dashboard.</p>
            </div>
        </div>

        @include('frontend.account.partials.nav')

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="account-card">
                    <p class="account-muted mb-2">Total Orders</p>
                    <div class="account-stat">{{ $totalOrders }}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="account-card">
                    <p class="account-muted mb-2">Active Services</p>
                    <div class="account-stat">{{ $activeServices }}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="account-card">
                    <p class="account-muted mb-2">Primary Email</p>
                    <div class="account-stat" style="font-size:18px;">{{ $user->email }}</div>
                </div>
            </div>
        </div>

        <div class="account-card">
            <h4 class="mb-3">Recent Orders</h4>
            @if($recentOrders->isEmpty())
                <p class="account-muted mb-0">No orders yet. Pick a hosting plan to start.</p>
            @else
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Plan</th>
                                <th>Billing</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentOrders as $order)
                                <tr>
                                    <td>{{ $order->order_number }}</td>
                                    <td>{{ optional($order->hosting)->title }} - {{ optional($order->hostingPlan)->title }}</td>
                                    <td>{{ ucfirst($order->billing_cycle) }}</td>
                                    <td><span class="badge {{ $order->status === 'active' ? 'bg-success' : 'bg-secondary' }}">{{ ucfirst($order->status) }}</span></td>
                                    <td>${{ number_format((float) $order->amount, 2) }}</td>
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
