<?php

namespace App\Filament\Resources\LikeResource\Pages;

use App\Filament\Resources\LikeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLikes extends ManageRecords
{
    protected static string $resource = LikeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
