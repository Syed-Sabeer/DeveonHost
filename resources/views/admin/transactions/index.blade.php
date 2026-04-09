@extends('layouts.admin.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Transactions</h5>
            <span class="text-muted">{{ $transactions->total() }} records</span>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>User</th>
                        <th>Plan Sold</th>
                        <th>Billing</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->order_number }}</td>
                            <td>{{ optional($transaction->user)->name }}</td>
                            <td>{{ optional($transaction->hosting)->title }} - {{ optional($transaction->hostingPlan)->title }}</td>
                            <td>{{ ucfirst($transaction->billing_cycle) }}</td>
                            <td><span class="badge bg-label-{{ $transaction->status === 'active' ? 'success' : ($transaction->status === 'pending' ? 'warning' : 'danger') }}">{{ ucfirst($transaction->status) }}</span></td>
                            <td>${{ number_format((float) $transaction->amount, 2) }}</td>
                            <td>
                                <a href="{{ route('admin.transactions.show', $transaction) }}" class="btn btn-sm btn-primary">Details</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">No transactions found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-body">{{ $transactions->links() }}</div>
    </div>
</div>
@endsection
