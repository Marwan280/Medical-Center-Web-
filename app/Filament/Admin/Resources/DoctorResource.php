<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DoctorResource\Pages;
use App\Filament\Admin\Tables\DoctorsTable;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Models\Contracts\HasName;



class DoctorResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Doctors';
    protected static ?int $navigationSort = 1;

    // ✅ Only show users with role = doctor
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('role', 'doctor');
    }

    // ✅ Form for creating/editing doctor
    public static function form(Schema $schema): Schema
{
    return $schema->components([
        TextInput::make('name')->required(),
        TextInput::make('email')->email()->required(),
        TextInput::make('password')
            ->password()
            ->dehydrated(fn ($state) => filled($state))
            ->dehydrateStateUsing(fn ($state) => bcrypt($state)),
    ]);
}
    // ✅ Table for listing doctors
    public static function table(Table $table): Table
    {
        return DoctorsTable::configure($table);
    }

    

    // ✅ Pages (IMPORTANT)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }
}