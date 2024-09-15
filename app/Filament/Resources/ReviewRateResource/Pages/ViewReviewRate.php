<?php

namespace App\Filament\Resources\ReviewRateResource\Pages;

use App\Filament\Resources\ReviewRateResource;
use Filament\Resources\Pages\ViewRecord;

class ViewReviewRate extends ViewRecord
{
    protected static string $resource = ReviewRateResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}