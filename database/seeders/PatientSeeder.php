<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Demo patient for local testing (phone + password).
     * Password must be changed on first login (must_change_password = true).
     */
    public function run(): void
    {
        Patient::query()->updateOrCreate(
            ['phone' => '966500000000'],
            [
                'name' => 'Demo Patient',
                'password' => 'password123',
                'must_change_password' => true,
                'password_changed_at' => null,
            ]
        );
    }
}
