<?php

namespace App\Filament\Resources\FeatureItemProductResource\Pages;

use App\Filament\Resources\FeatureItemProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureItemProducts extends ListRecords
{
    protected static string $resource = FeatureItemProductResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
