<?php

namespace App\Filament\Resources\TyreResource\Pages;

use App\Filament\Resources\TyreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTyre extends EditRecord
{
    protected static string $resource = TyreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}