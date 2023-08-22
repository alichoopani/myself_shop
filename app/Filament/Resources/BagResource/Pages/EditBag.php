<?php

namespace App\Filament\Resources\BagResource\Pages;

use App\Filament\Resources\BagResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBag extends EditRecord
{
    protected static string $resource = BagResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
