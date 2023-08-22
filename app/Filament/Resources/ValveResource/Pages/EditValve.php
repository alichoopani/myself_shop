<?php

namespace App\Filament\Resources\ValveResource\Pages;

use App\Filament\Resources\ValveResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditValve extends EditRecord
{
    protected static string $resource = ValveResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
