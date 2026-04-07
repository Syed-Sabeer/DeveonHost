@extends('layouts.admin.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Create Plan for {{ $hosting->title }}</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form action="{{ route('admin.hostings.plans.store', $hosting) }}" method="POST">
                @csrf
                @include('admin.hosting-plans.partials.form', ['plan' => null])
                <button type="submit" class="btn btn-primary">Save Plan</button>
                <a href="{{ route('admin.hostings.plans.index', $hosting) }}" class="btn btn-label-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var wrapper = document.getElementById('feature-wrapper');
        var addBtn = document.getElementById('add-feature');

        addBtn.addEventListener('click', function () {
            var row = document.createElement('div');
            row.className = 'input-group mb-2 feature-row';
            row.innerHTML = '<input type="text" name="features[]" class="form-control" placeholder="Feature detail" required><button type="button" class="btn btn-outline-danger remove-feature">Remove</button>';
            wrapper.appendChild(row);
        });

        wrapper.addEventListener('click', function (event) {
            if (!event.target.classList.contains('remove-feature')) {
                return;
            }

            if (wrapper.querySelectorAll('.feature-row').length === 1) {
                return;
            }

            event.target.closest('.feature-row').remove();
        });
    });
</script>
@endsection
