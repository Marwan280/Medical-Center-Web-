<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AppointmentResource\Pages;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Appointments';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\Select::make('patient_id')
                ->relationship('patient', 'full_name')
                ->searchable()
                ->required(),

            Forms\Components\Select::make('doctor_id')
                ->relationship('doctor', 'name')
                ->searchable()
                ->required(),

            Forms\Components\DateTimePicker::make('appointment_date')
                ->required(),

            Forms\Components\TextInput::make('status')
                ->default('scheduled'),
        ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}