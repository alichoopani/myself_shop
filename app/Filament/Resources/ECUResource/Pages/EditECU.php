<?php

namespace App\Filament\Resources\ECUResource\Pages;

use App\Filament\Resources\ECUResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditECU extends EditRecord
{
    protected static string $resource = ECUResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
