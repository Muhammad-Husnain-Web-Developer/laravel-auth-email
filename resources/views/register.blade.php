@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8fafc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .auth-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .auth-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 40px;
        max-width: 420px;
        width: 100%;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }
    .auth-card h2 {
        font-weight: 600;
        margin-bottom: 10px;
        color: #111827;
    }
    .auth-card p {
        color: #6b7280;
        font-size: 14px;
    }
    .form-label {
        font-weight: 500;
        color: #374151;
    }
    .form-control {
        border-radius: 8px;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
    }
    .form-control:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37,99,235,0.15);
    }
    .btn-primary {
        background-color: #2563eb;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        padding: 12px;
        transition: background 0.2s;
    }
    .btn-primary:hover {
        background-color: #1d4ed8;
    }
    .auth-footer {
        margin-top: 20px;
        font-size: 14px;
    }
    .auth-footer a {
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
    }
    .auth-footer a:hover {
        text-decoration: underline;
    }
    .logo {
        max-width: 100px;
        margin-bottom: 15px;
    }
</style>

<div class="auth-wrapper">
    <div class="auth-card">
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/100x40?text=Logo" alt="Logo" class="logo">
            <h2>Create Account</h2>
            <p>Join us and start your journey 🚀</p>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Messages --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.user') }}" method="POST">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}" required autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>

        <div class="auth-footer text-center">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</div>
@endsection
