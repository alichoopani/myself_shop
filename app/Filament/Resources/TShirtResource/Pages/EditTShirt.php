<?php

namespace App\Filament\Resources\TShirtResource\Pages;

use App\Filament\Resources\TShirtResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTShirt extends EditRecord
{
    protected static string $resource = TShirtResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
