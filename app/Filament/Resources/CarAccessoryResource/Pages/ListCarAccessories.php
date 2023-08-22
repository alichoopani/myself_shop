<?php

namespace App\Filament\Resources\CarAccessoryResource\Pages;

use App\Filament\Resources\CarAccessoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarAccessories extends ListRecords
{
    protected static string $resource = CarAccessoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
