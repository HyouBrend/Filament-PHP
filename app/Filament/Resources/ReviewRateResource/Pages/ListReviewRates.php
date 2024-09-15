<?php

namespace App\Filament\Resources\ReviewRateResource\Pages;

use App\Filament\Resources\ReviewRateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReviewRates extends ListRecords
{
    protected static string $resource = ReviewRateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
