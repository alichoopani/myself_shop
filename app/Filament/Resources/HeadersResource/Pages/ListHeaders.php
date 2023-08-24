<?php

namespace App\Filament\Resources\HeadersResource\Pages;

use App\Filament\Resources\HeadersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeaders extends ListRecords
{
    protected static string $resource = HeadersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
