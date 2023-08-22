<?php

namespace App\Filament\Resources\PistonResource\Pages;

use App\Filament\Resources\PistonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPiston extends EditRecord
{
    protected static string $resource = PistonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
