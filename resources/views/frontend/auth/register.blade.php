@extends('layouts.frontend.master')

@section('content')
<section class="pt-120 pb-120" style="background: linear-gradient(180deg, #f7f9fc 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-body p-5 p-md-5">
                        <div class="mb-4">
                            <span class="badge bg-primary-subtle text-primary mb-2">Step 1 of 2</span>
                            <h3 class="mb-2">Create your account</h3>
                            <p class="text-body-secondary mb-0">Click Register and we’ll send a one-time code to your email to confirm the account.</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                        @endif

                        <form method="POST" action="{{ route('register.attempt') }}" class="row g-3">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-12 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Register</button>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0 text-body-secondary">Already have an account? <a href="{{ route('user.login') }}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
