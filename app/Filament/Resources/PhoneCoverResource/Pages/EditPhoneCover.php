<?php

namespace App\Filament\Resources\PhoneCoverResource\Pages;

use App\Filament\Resources\PhoneCoverResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhoneCover extends EditRecord
{
    protected static string $resource = PhoneCoverResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
