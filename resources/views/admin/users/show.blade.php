@extends('layouts.admin.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">User Details</h5>
            <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-label-primary">Back</a>
        </div>
        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-4">
                    <h6>Name</h6>
                    <p>{{ $user->name }}</p>
                </div>
                <div class="col-md-4">
                    <h6>Email</h6>
                    <p>{{ $user->email }}</p>
                </div>
                <div class="col-md-4">
                    <h6>Joined</h6>
                    <p>{{ $user->created_at->format('d M Y h:i A') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Transactions</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Plan</th>
                        <th>Billing</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Created</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($user->transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->order_number }}</td>
                            <td>{{ optional($transaction->hosting)->title }} - {{ optional($transaction->hostingPlan)->title }}</td>
                            <td>{{ ucfirst($transaction->billing_cycle) }}</td>
                            <td><span class="badge bg-label-success">{{ ucfirst($transaction->status) }}</span></td>
                            <td>${{ number_format((float) $transaction->amount, 2) }}</td>
                            <td>{{ $transaction->created_at->format('d M Y h:i A') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">No transactions found for this user.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
