<?php

namespace App\Filament\Resources\CamShaftResource\Pages;

use App\Filament\Resources\CamShaftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCamShaft extends EditRecord
{
    protected static string $resource = CamShaftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
