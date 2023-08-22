<?php

namespace App\Filament\Resources\TShirtResource\Pages;

use App\Filament\Resources\TShirtResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTShirts extends ListRecords
{
    protected static string $resource = TShirtResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
