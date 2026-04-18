<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite('resources/css/auth.css')

</head>
<body class="auth-page">
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Welcome Back!</h1>
                <p class="auth-subtitle">Sign in to your account</p>
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

            <form action="{{ route('login.submit') }}" method="POST" class="auth-form">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-input"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input"
                        required
                        autocomplete="current-password"
                    >
                </div>

                <div class="form-row">
                    <label class="checkbox-wrapper">
                        <input type="checkbox" name="remember" class="form-checkbox">
                        <span>Remember me</span>
                        <br>
                        <a href="{{ route('register') }}" class="auth-link">
                         Not registered? Sign up
                        </a>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="auth-link">Forgot password?</a>
                    @endif
                </div>
                
                

                <button type="submit" class="btn btn-primary btn-block">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>