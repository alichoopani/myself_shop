<?php

namespace App\Filament\Resources\CamShaftResource\Pages;

use App\Filament\Resources\CamShaftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCamShafts extends ListRecords
{
    protected static string $resource = CamShaftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
