<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\PatientProfile;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Patients', PatientProfile::count())
                ->description('Registered patient profiles'),

            Stat::make('Total Doctors', User::where('role', 'doctor')->count())
                ->description('Available doctors'),

            Stat::make(
                'Today Appointments',
                Appointment::query()
                    ->whereDate('appointment_date', today())
                    ->count()
            )->description('Scheduled today'),

            Stat::make(
                'Pending Appointments',
                Appointment::query()
                    ->where('appointment_status', 'pending')
                    ->count()
            )->description('Need follow-up'),
        ];
    }
}