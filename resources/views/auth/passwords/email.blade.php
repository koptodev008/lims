@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-mail auth-icon"></i>
                    </div>
                    <h3 class="mb-4">{{ __('Reset Password') }}</h3>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                    <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <button class="btn btn-primary mb-4 shadow-2" type="submit" >   {{ __('Send Password Reset Link') }}</button>
                    <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
