<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Registration</title>
    @vite('resources/css/auth.css')
</head>
<body class="auth-page">

<div class="auth-wrapper">
    <div class="auth-card">
        <div class="auth-header">
            <h1 class="auth-title">Create Patient Account</h1>
            <p class="auth-subtitle">Register as a patient to get started</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-error">
                <ul class="alert-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.submit') }}" class="auth-form">
            @csrf

            <div class="form-group">
                <label class="form-label" for="full_name">Full Name</label>
                <input id="full_name" type="text" name="full_name" class="form-input" value="{{ old('full_name') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="phone_number">Phone Number</label>
                <input id="phone_number" type="text" name="phone_number" class="form-input" value="{{ old('phone_number') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email (optional)</label>
                <input id="email" type="email" name="email" class="form-input" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label class="form-label" for="gender">Gender</label>
                <select id="gender" name="gender" class="form-input" required>
                    <option value="">Select Gender</option>
                    <option value="male" @selected(old('gender') === 'male')>Male</option>
                    <option value="female" @selected(old('gender') === 'female')>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="date_of_birth">Date of Birth</label>
                <input id="date_of_birth" type="date" name="date_of_birth" class="form-input" value="{{ old('date_of_birth') }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="national_id">National ID (optional)</label>
                <input id="national_id" type="text" name="national_id" class="form-input" value="{{ old('national_id') }}">
            </div>

            <div class="form-group">
                <label class="form-label" for="address">Address (optional)</label>
                <textarea id="address" name="address" class="form-input" rows="3">{{ old('address') }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input id="password" type="password" name="password" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-input" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Register as Patient
            </button>
        </form>

        <p style="margin-top: 15px; text-align: center;">
            Already have an account?
            <a href="{{ route('login') }}" class="auth-link">Login</a>
        </p>
    </div>
</div>

</body>
</html>