<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    @vite('resources/css/auth.css')
</head>
<body class="auth-page">

<div class="auth-wrapper">
    <div class="auth-card">
        <div class="auth-header">
            <h1 class="auth-title">Create Account</h1>
            <p class="auth-subtitle">Sign up to get started</p>
        </div>

        <form method="POST" action="{{ route('register.submit') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-input" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Register
            </button>
        </form>

        <p style="margin-top: 15px; text-align: center;">
            Already have an account?
            <a href="{{ route('login') }}" class="auth-link">Login</a>
        </p>
    </div>
</div>

// patient registeration form

<div class="form-group">
    <label class="form-label">Full Name</label>
    <input type="text" name="full_name" class="form-input" required>
</div>

<div class="form-group">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-input" required>
</div>

<div class="form-group">
    <label class="form-label">Phone</label>
    <input type="text" name="phone" class="form-input">
</div>

<div class="form-group">
    <label class="form-label">Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-input">
</div>

<div class="form-group">
    <label class="form-label">Gender</label>
    <select name="gender" class="form-input">
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>

<div class="form-group">
    <label class="form-label">Address</label>
    <textarea name="address" class="form-input"></textarea>
</div>

<div class="form-group">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-input" required>
</div>

<div class="form-group">
    <label class="form-label">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-input" required>
</div>

</body>
</html>