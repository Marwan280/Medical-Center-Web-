<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TodayAppointments extends BaseWidget
{
    protected static ?string $heading = "Today's Appointments";

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Appointment::query()
                    ->with(['patientProfile', 'doctor'])
                    ->whereDate('appointment_date', today())
            )
            ->columns([
                Tables\Columns\TextColumn::make('appointment_id')
                    ->label('ID')
                    ->sortable(),

                Tables\Columns\TextColumn::make('patientProfile.full_name')
                    ->label('Patient')
                    ->searchable(),

                Tables\Columns\TextColumn::make('doctor.name')
                    ->label('Doctor')
                    ->searchable(),

                Tables\Columns\TextColumn::make('appointment_type')
                    ->badge()
                    ->label('Type'),

                Tables\Columns\TextColumn::make('appointment_date')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('appointment_time')
                    ->time('H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('appointment_status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'info',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                        default => 'gray',
                    }),
            ])
            ->defaultSort('appointment_time');
    }
}