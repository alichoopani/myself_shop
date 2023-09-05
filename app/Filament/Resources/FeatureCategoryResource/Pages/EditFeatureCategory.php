<?php

namespace App\Filament\Resources\FeatureCategoryResource\Pages;

use App\Filament\Resources\FeatureCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeatureCategory extends EditRecord
{
    protected static string $resource = FeatureCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
