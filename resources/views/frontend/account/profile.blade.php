@extends('layouts.frontend.master')

@section('css')
<style>
.account-page {
    padding: 120px 0;
    background: linear-gradient(180deg, #f4f8ff 0%, #ffffff 42%);
}
.account__nav {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.account__nav .tg-btn.active {
    background: #0d5ef4;
    border-color: #0d5ef4;
    color: #fff;
}
.account-card {
    background: #fff;
    border-radius: 14px;
    border: 1px solid #e6ecff;
    box-shadow: 0 12px 35px rgba(20, 44, 120, 0.08);
    padding: 24px;
}
</style>
@endsection

@section('content')
<main class="main-area fix account-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-25">
                <h2 class="title mb-2">Profile Details</h2>
                <p class="text-muted mb-0">Keep your customer profile details up to date.</p>
            </div>
        </div>

        @include('frontend.account.partials.nav')

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="account-card">
            <form action="{{ route('account.profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="tg-btn mt-4">Save Changes</button>
            </form>
        </div>
    </div>
</main>
@endsection
