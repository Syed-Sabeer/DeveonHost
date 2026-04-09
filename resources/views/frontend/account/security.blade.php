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
                <h2 class="title mb-2">Security</h2>
                <p class="text-muted mb-0">Change your account password and keep your account secure.</p>
            </div>
        </div>

        @include('frontend.account.partials.nav')

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="account-card">
            <form action="{{ route('account.security.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Current Password</label>
                        <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required>
                        @error('current_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">New Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="tg-btn mt-4">Update Password</button>
            </form>
        </div>
    </div>
</main>
@endsection
