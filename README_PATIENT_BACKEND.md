# Patient portal (Laravel backend)

This app includes **patient-only** authentication and family profile management. Admin/Doctor features are out of scope.

## Features

- **Login** with **phone** (normalized to digits) + **password**; Laravel **session** guard `patient`.
- **First-login password change**: `must_change_password` forces `/patient/password/first-change` until a new password is set.
- **Family profiles**: one **primary** profile (auto-created if missing) + **dependents** with CRUD.
- **Profile selection** stored in session as `selected_family_profile_id`.
- **Authorization**: all profile queries are scoped to `auth('patient')->id()`; dependents cannot be edited as primary.

## Routes (prefix `/patient`)

| Method | Path | Name |
|--------|------|------|
| GET | `/patient/login` | `patient.login` |
| POST | `/patient/login` | (login) |
| POST | `/patient/logout` | `patient.logout` |
| GET/POST | `/patient/password/first-change` | `patient.password.first-change` / `patient.password.first-change.submit` |
| GET | `/patient/profiles` | `patient.profiles.index` |
| POST | `/patient/profiles/select` | `patient.profiles.select` |
| POST | `/patient/profiles/dependents` | `patient.profiles.dependents.store` |
| GET | `/patient/profiles/dependents/{familyProfile}/edit` | `patient.profiles.dependents.edit` |
| PUT | `/patient/profiles/dependents/{familyProfile}` | `patient.profiles.dependents.update` |
| DELETE | `/patient/profiles/dependents/{familyProfile}` | `patient.profiles.dependents.destroy` |

## Demo account (after `php artisan db:seed`)

- **Phone:** `966500000000`
- **Password:** `password123`
- **First login:** you are redirected to change password (min 8 characters), then to profile selection.

## Commands

```bash
cd patient-platform
cp .env.example .env   # if needed
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

Open `http://127.0.0.1:8000/patient/login`.

## Database

- `patients`: phone (unique), name, password (hashed), `must_change_password`, `password_changed_at`.
- `family_profiles`: `patient_id`, `type` (`primary` | `dependent`), `full_name`, `relationship`, `date_of_birth`.

## Configuration

- Guard: `config/auth.php` → `guards.patient` + `providers.patients` → `App\Models\Patient`.
- Unauthenticated access to `auth:patient` routes redirects to `route('patient.login')` (see `bootstrap/app.php`).

## Placeholder views

Blade files under `resources/views/patient/` are minimal HTML forms for manual testing—replace with your real frontend later.
