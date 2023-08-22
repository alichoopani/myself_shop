<?php

namespace App\Filament\Resources\PhoneCoverResource\Pages;

use App\Filament\Resources\PhoneCoverResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhoneCovers extends ListRecords
{
    protected static string $resource = PhoneCoverResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
