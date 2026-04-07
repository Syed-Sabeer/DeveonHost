@extends('layouts.frontend.master')

@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h3 class="mb-3">Verify Password Reset OTP</h3>
                        <p class="mb-3">OTP sent to {{ $email }}</p>

                        @if ($errors->any())
                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                        @endif

                        <form method="POST" action="{{ route('password.otp.verify') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Enter 6-digit OTP</label>
                                <input type="text" name="otp" class="form-control" maxlength="6" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Verify OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
