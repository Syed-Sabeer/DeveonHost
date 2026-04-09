@extends('layouts.admin.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Total Hostings</h5>
                            <h2 class="mb-0">{{ $hostingCount }}</h2>
                        </div>
                        <div class="avatar avatar-lg bg-label-primary">
                            <i class="icon-base ti tabler-server icon-26px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Total Hosting Plans</h5>
                            <h2 class="mb-0">{{ $planCount }}</h2>
                        </div>
                        <div class="avatar avatar-lg bg-label-success">
                            <i class="icon-base ti tabler-list-details icon-26px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">Contact Submissions</h5>
                            <h2 class="mb-0">{{ $contactSubmissionCount }}</h2>
                        </div>
                        <div class="avatar avatar-lg bg-label-warning">
                            <i class="icon-base ti tabler-mail icon-26px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-body">
            <h5 class="mb-2">Quick Action</h5>
            <p class="text-body-secondary mb-4">Manage your hosting categories and pricing plans from one place.</p>
            <a href="{{ route('admin.hostings.index') }}" class="btn btn-primary">Go to Hosting Management</a>
        </div>
    </div>
</div>
@endsection
