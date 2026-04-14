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
        // Note: This seeder needs a valid user_id. 
        // For demo purposes, assuming user with ID 1 exists
        Patient::query()->updateOrCreate(
            ['phone' => '966500000000'],
            [
                'user_id' => 1, // Replace with actual user ID
                'full_name' => 'Demo Patient',
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'address' => 'Demo Address',
            ]
        );
    }
}
