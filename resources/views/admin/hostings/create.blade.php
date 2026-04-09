@extends('layouts.admin.master')

@section('content')
<div class="container-xxl container-p-y">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Create Hosting</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form action="{{ route('admin.hostings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Icon</label>
                    <input type="file" name="icon" class="form-control" accept=".svg,.png,.jpg,.jpeg,.jfif,.webp,.gif,.bmp,.avif,.ico" required>
                    <small class="text-body-secondary">Allowed: SVG, PNG, JPG, JPEG, JFIF, WEBP, GIF, BMP, AVIF, ICO.</small>
                </div>
                <div class="mb-4">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Slug (View Slug)</label>
                    <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" placeholder="cloud-hosting" required>
                    <small class="text-body-secondary">Use lowercase letters, numbers, and dashes. Example: cloud-hosting</small>
                </div>
                <div class="mb-4">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                </div>
                <div class="mb-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" role="switch" id="hosting-is-active" {{ old('is_active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="hosting-is-active">Active</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save Hosting</button>
                <a href="{{ route('admin.hostings.index') }}" class="btn btn-label-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
