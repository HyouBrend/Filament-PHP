<?php

namespace App\Filament\Resources\ReviewRateResource\Pages;

use App\Filament\Resources\ReviewRateResource;
use Filament\Resources\Pages\EditRecord;

class EditReviewRate extends EditRecord
{
    protected static string $resource = ReviewRateResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}