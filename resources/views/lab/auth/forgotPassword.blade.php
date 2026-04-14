<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    @vite('resources/css/auth.css')
</head>
<body class="auth-page">
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Forgot Password</h1>
                <p class="auth-subtitle">Enter your email to reset your password</p>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error">
                    <ul class="alert-list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-input" value="{{ old('email') }}" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Send Reset Link
                </button>
            </form>

            <p style="margin-top: 15px; text-align: center;">
                Remember your password?
                <a href="{{ route('login') }}" class="auth-link">Back to Login</a>
            </p>
        </div>
    </div>
</body>
</html>