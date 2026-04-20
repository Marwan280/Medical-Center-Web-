<?php

namespace App\Services\Auth;

use App\Models\PatientProfile;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientRegistrationService
{
    public function register(array $data): array
    {
        return DB::transaction(function () use ($data) {
            $email = $data['email'] ?? null;

            $user = User::create([
                'full_name' => $data['full_name'],
                'phone_number' => $data['phone_number'],
                'email' => $email,
                'password' => Hash::make($data['password']),
                'role' => 'patient',
                'must_change_password' => false,
                'is_active' => true,
                'status' => 'active',
                'created_by_user_id' => null,
                'last_login_at' => null,
            ]);

            $profile = PatientProfile::create([
                'user_id' => $user->user_id,
                'full_name' => $data['full_name'],
                'gender' => $data['gender'],
                'date_of_birth' => $data['date_of_birth'],
                'national_id' => $data['national_id'] ?? null,
                'address' => $data['address'] ?? null,
                'email' => $email,
                'relationship_to_primary' => 'self',
                'is_primary' => true,
                'created_by_user_id' => null,
                'is_active' => true,
            ]);

            return [
                'user' => $user,
                'profile' => $profile,
            ];
        });
    }
}
