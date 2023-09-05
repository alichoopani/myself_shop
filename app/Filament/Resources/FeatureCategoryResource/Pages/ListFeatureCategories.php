<?php

namespace App\Filament\Resources\FeatureCategoryResource\Pages;

use App\Filament\Resources\FeatureCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureCategories extends ListRecords
{
    protected static string $resource = FeatureCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
