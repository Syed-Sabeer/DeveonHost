@extends('layouts.frontend.master')

@section('content')
<section class="pt-120 pb-120" style="background: linear-gradient(180deg, #f7f9fc 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-body p-5 p-md-5">
                        <div class="mb-4">
                            <span class="badge bg-success-subtle text-success mb-2">Step 2 of 2</span>
                            <h3 class="mb-2">Verify your email</h3>
                            <p class="text-body-secondary mb-0">We sent a 6-digit code to {{ $email }}. Enter it below to finish registration.</p>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                        @endif

                        <form method="POST" action="{{ route('register.otp.verify') }}" class="row g-3">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Enter 6-digit OTP</label>
                                <input type="text" name="otp" class="form-control form-control-lg" maxlength="6" inputmode="numeric" autocomplete="one-time-code" required>
                            </div>
                            <div class="col-12 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Verify & Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
