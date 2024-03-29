<?php

namespace App\Filament\Resources\FeatureItemResource\Pages;

use App\Filament\Resources\FeatureItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureItems extends ListRecords
{
    protected static string $resource = FeatureItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
