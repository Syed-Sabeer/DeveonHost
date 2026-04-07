@extends('layouts.admin.master')

@section('content')
<div class="container-xxl grow container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Hostings</h5>
            <a href="{{ route('admin.hostings.create') }}" class="btn btn-primary">Add Hosting</a>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Plans</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($hostings as $hosting)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $hosting->icon) }}" alt="{{ $hosting->title }} icon" width="32" class="rounded">
                                </td>
                                <td>{{ $hosting->title }}</td>
                                <td>{{ $hosting->slug }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($hosting->description, 80) }}</td>
                                <td>
                                    <a href="{{ route('admin.hostings.plans.index', $hosting) }}" class="btn btn-sm btn-outline-primary">
                                        Manage Plans
                                    </a>
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.hostings.edit', $hosting) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.hostings.destroy', $hosting) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this hosting?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No hostings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $hostings->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
