@php
    $features = old('features', $plan?->features ?? ['']);
@endphp

<div class="mb-4">
    <label class="form-label">Title</label>
    <input type="text" name="title" value="{{ old('title', $plan?->title) }}" class="form-control" required>
</div>

<div class="mb-4">
    <label class="form-label">Badge (Optional)</label>
    <input type="text" name="badge" value="{{ old('badge', $plan?->badge) }}" class="form-control" placeholder="Popular">
</div>

<div class="mb-4">
    <label class="form-label">Description</label>
    <textarea name="description" rows="4" class="form-control" required>{{ old('description', $plan?->description) }}</textarea>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label">Amount Per Month</label>
        <input type="number" name="amount_per_month" value="{{ old('amount_per_month', $plan?->amount_per_month) }}" class="form-control" step="0.01" min="0" required>
    </div>
    <div class="col-md-6 mb-4">
        <label class="form-label">Discount Percentage Annual (Optional)</label>
        <input type="number" name="discount_percentage_annual" value="{{ old('discount_percentage_annual', $plan?->discount_percentage_annual) }}" class="form-control" step="0.01" min="0" max="100">
    </div>
</div>

<div class="mb-4">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <label class="form-label mb-0">Features</label>
        <button type="button" id="add-feature" class="btn btn-sm btn-outline-primary">Add Feature</button>
    </div>

    <div id="feature-wrapper">
        @foreach ($features as $feature)
            <div class="input-group mb-2 feature-row">
                <input type="text" name="features[]" value="{{ $feature }}" class="form-control" placeholder="Feature detail" required>
                <button type="button" class="btn btn-outline-danger remove-feature">Remove</button>
            </div>
        @endforeach
    </div>
</div>

<div class="mb-4">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="is_active" value="1" role="switch" id="plan-is-active" {{ old('is_active', $plan?->is_active ?? true) ? 'checked' : '' }}>
        <label class="form-check-label" for="plan-is-active">Active</label>
    </div>
</div>
