<?php

namespace App\Filament\Resources\RetainerResource\Pages;

use App\Filament\Resources\RetainerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRetainer extends EditRecord
{
    protected static string $resource = RetainerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
