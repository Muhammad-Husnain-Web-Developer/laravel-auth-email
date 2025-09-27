<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1d3557, #457b9d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
        }
        .login-card h2 {
            font-weight: bold;
            color: #1d3557;
            margin-bottom: 20px;
        }
        .btn-custom {
            background: #457b9d;
            border: none;
            color: #fff;
            font-weight: 600;
        }
        .btn-custom:hover {
            background: #1d3557;
        }
        .form-control {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3 text-start">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <div class="mb-3 text-start">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>

        <p class="mt-3">Don’t have an account? <a href="{{ route('register.user') }}">Register</a></p>
    </div>
</body>
</html>
