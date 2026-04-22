<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;




class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@medical.com'],
            [
                'full_name'            => 'Admin',
                'phone_number'         => '0000000000',
                'email'                => 'admin@medical.com',
                'password'             => Hash::make('Admin12345'),
                'role'                 => 'admin',
                'is_active'            => true,
                'status'               => 'active',
                'must_change_password' => false,
                'created_by_user_id'   => 1,
                'last_login_at'        => now(),
            ]
        );
    }
}