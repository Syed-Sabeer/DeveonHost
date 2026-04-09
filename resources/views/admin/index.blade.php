@extends('layouts.admin.master')

@section('css')
<style>
    .dashboard-metric-icon {
        width: 46px;
        height: 46px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .dashboard-metric-icon i {
        font-size: 22px;
        line-height: 1;
    }
</style>
@endsection

@section('content')
<div class="container-xxl grow container-p-y">
    <div class="row g-6">
        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Total Hostings</h5><h2 class="mb-0">{{ $hostingCount }}</h2></div><div class="dashboard-metric-icon bg-label-primary"><i class="icon-base ti tabler-server icon-26px"></i></div></div></div></div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Total Hosting Plans</h5><h2 class="mb-0">{{ $planCount }}</h2></div><div class="dashboard-metric-icon bg-label-success"><i class="icon-base ti tabler-list-details icon-26px"></i></div></div></div></div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Contact Submissions</h5><h2 class="mb-0">{{ $contactSubmissionCount }}</h2></div><div class="dashboard-metric-icon bg-label-warning"><i class="icon-base ti tabler-mail icon-26px"></i></div></div></div></div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Registered Users</h5><h2 class="mb-0">{{ $userCount }}</h2></div><div class="dashboard-metric-icon bg-label-info"><i class="icon-base ti tabler-users icon-26px"></i></div></div></div></div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Total Transactions</h5><h2 class="mb-0">{{ $transactionCount }}</h2></div><div class="dashboard-metric-icon bg-label-secondary"><i class="icon-base ti tabler-credit-card icon-26px"></i></div></div></div></div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Revenue (Active)</h5><h2 class="mb-0">${{ number_format((float) $revenueTotal, 2) }}</h2></div><div class="dashboard-metric-icon bg-label-success"><i class="icon-base ti tabler-currency-dollar icon-26px"></i></div></div></div></div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Top Sold Plan</h5><h6 class="mb-1">{{ $topPlanName ?: 'N/A' }}</h6><p class="mb-0 text-body-secondary">{{ $topPlanSoldCount }} sales</p></div><div class="dashboard-metric-icon bg-label-primary"><i class="icon-base ti tabler-chart-bar icon-26px"></i></div></div></div></div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card"><div class="card-body"><div class="d-flex justify-content-between align-items-center"><div><h5 class="mb-1">Top Hosting Type</h5><h6 class="mb-1">{{ $topHostingTypeName ?: 'N/A' }}</h6><p class="mb-0 text-body-secondary">{{ $topHostingTypeSoldCount }} sales</p></div><div class="dashboard-metric-icon bg-label-dark"><i class="icon-base ti tabler-brand-databricks icon-26px"></i></div></div></div></div>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-body">
            <h5 class="mb-3">Individual Plan Sales</h5>
            @if($planSalesBreakdown->isEmpty())
                <p class="text-body-secondary mb-0">No active plan sales recorded yet.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Plan</th>
                                <th>Units Sold</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($planSalesBreakdown as $planSale)
                                <tr>
                                    <td>{{ optional($planSale->hostingPlan)->title ?: 'Unknown Plan' }}</td>
                                    <td>{{ (int) $planSale->sold_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-body">
            <h5 class="mb-2">Quick Action</h5>
            <p class="text-body-secondary mb-4">Manage hostings, users, plan sales, and customer payments from one place.</p>
            <a href="{{ route('admin.transactions.index') }}" class="btn btn-primary">View Transactions</a>
        </div>
    </div>
</div>
@endsection
