<?php

namespace App\Filament\Resources\CrankShaftResource\Pages;

use App\Filament\Resources\CrankShaftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCrankShafts extends ListRecords
{
    protected static string $resource = CrankShaftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
