@extends('layouts.admin.master')

@section('content')
<div class="container-xxl container-p-y">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Edit Hosting</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form action="{{ route('admin.hostings.update', $hosting) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="form-label">Current Icon</label>
                    <div>
                        <img src="{{ asset('storage/' . $hosting->icon) }}" alt="{{ $hosting->title }}" width="48" class="rounded mb-2">
                    </div>
                    <input type="file" name="icon" class="form-control" accept=".svg,.png,.jpg,.jpeg,.jfif,.webp,.gif,.bmp,.avif,.ico">
                    <small class="text-body-secondary">Leave empty to keep current icon.</small>
                </div>
                <div class="mb-4">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="{{ old('title', $hosting->title) }}" class="form-control" required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Slug (View Slug)</label>
                    <input type="text" name="slug" value="{{ old('slug', $hosting->slug) }}" class="form-control" placeholder="cloud-hosting" required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ old('description', $hosting->description) }}</textarea>
                </div>
                <div class="mb-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" role="switch" id="hosting-is-active" {{ old('is_active', $hosting->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="hosting-is-active">Active</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Hosting</button>
                <a href="{{ route('admin.hostings.index') }}" class="btn btn-label-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
