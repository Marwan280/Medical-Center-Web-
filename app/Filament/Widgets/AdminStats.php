<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make('Doctors', User::where('role', 'doctor')->count()),
            // Stat::make('Patients', Patient::count()),
            // Stat::make('Appointments', Appointment::count()),
        ];
    }
}