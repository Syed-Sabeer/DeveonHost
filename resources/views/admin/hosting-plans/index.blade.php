@extends('layouts.admin.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-0">Plans for {{ $hosting->title }}</h5>
                <small class="text-body-secondary">Manage monthly and annual discount plans.</small>
            </div>
            <div>
                <a href="{{ route('admin.hostings.index') }}" class="btn btn-label-secondary">Back to Hostings</a>
                <a href="{{ route('admin.hostings.plans.create', $hosting) }}" class="btn btn-primary">Add Plan</a>
            </div>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Badge</th>
                            <th>Monthly Amount</th>
                            <th>Annual Discount</th>
                            <th>Status</th>
                            <th>Features</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($plans as $plan)
                            <tr>
                                <td>{{ $plan->title }}</td>
                                <td>{{ $plan->badge ?: '-' }}</td>
                                <td>${{ number_format((float) $plan->amount_per_month, 2) }}</td>
                                <td>{{ $plan->discount_percentage_annual ? $plan->discount_percentage_annual . '%' : '-' }}</td>
                                <td>
                                    <form action="{{ route('admin.hostings.plans.toggle-status', [$hosting, $plan]) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-check form-switch mb-0">
                                            <input class="form-check-input" type="checkbox" role="switch" {{ $plan->is_active ? 'checked' : '' }} onchange="this.form.submit()">
                                            <label class="form-check-label">{{ $plan->is_active ? 'Active' : 'Inactive' }}</label>
                                        </div>
                                    </form>
                                </td>
                                <td>{{ is_array($plan->features) ? count($plan->features) : 0 }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.hostings.plans.edit', [$hosting, $plan]) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.hostings.plans.destroy', [$hosting, $plan]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this plan?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No plans available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">{{ $plans->links() }}</div>
        </div>
    </div>
</div>
@endsection
