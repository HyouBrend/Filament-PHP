<?php

namespace App\Filament\Resources\HolidayPackageResource\Pages;

use App\Filament\Resources\HolidayPackageResource;
use Filament\Resources\Pages\ViewRecord;

class ViewHolidayPackage extends ViewRecord
{
    protected static string $resource = HolidayPackageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}