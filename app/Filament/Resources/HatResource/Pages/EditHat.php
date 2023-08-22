<?php

namespace App\Filament\Resources\HatResource\Pages;

use App\Filament\Resources\HatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHat extends EditRecord
{
    protected static string $resource = HatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
