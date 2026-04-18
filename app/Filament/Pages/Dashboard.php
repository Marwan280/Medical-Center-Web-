<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Actions\Action;

class Dashboard extends BaseDashboard
{
    protected function getHeaderActions(): array
    {
        return [
            Action::make('addDoctor')
                ->label('Add Doctor')
                ->icon('heroicon-o-plus')
                ->color('success')
                ->url('/admin/users/create?role=doctor'),

            Action::make('viewDoctors')
                ->label('View Doctors')
                ->icon('heroicon-o-users')
                ->color('info')
                ->url('/admin/users?tableFilters[role][value]=doctor'),

            Action::make('manageSchedules')
                ->label('Appointments')
                ->icon('heroicon-o-calendar')
                ->color('warning')
                ->url('/admin/schedules'),
        ];
    }
}