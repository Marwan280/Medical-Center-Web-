<?php

namespace App\Filament\Admin\Resources\DoctorResource\Pages;

use App\Filament\Admin\Resources\DoctorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDoctor extends CreateRecord
{
    protected static string $resource = DoctorResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}