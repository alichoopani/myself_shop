<?php

namespace App\Filament\Resources\HatResource\Pages;

use App\Filament\Resources\HatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHats extends ListRecords
{
    protected static string $resource = HatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
