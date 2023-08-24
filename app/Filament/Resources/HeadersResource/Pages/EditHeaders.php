<?php

namespace App\Filament\Resources\HeadersResource\Pages;

use App\Filament\Resources\HeadersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeaders extends EditRecord
{
    protected static string $resource = HeadersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
