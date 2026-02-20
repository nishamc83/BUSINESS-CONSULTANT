@extends('auth.layout')

@section('title', 'Admin Login')

@section('content')
<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-lock"></i> Admin Login</h2>
        <p>Access your admin panel</p>
    </div>

    <div class="card-body">
        @if($errors->has('login'))
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first('login') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div>
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                       id="password" name="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-login">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>

        <div class="text-center-link">
            <a href="{{ route('home') }}">← Back to Website</a>
        </div>
    </div>
</div>
@endsection
