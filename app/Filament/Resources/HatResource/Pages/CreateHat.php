<?php

namespace App\Filament\Resources\HatResource\Pages;

use App\Filament\Resources\HatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHat extends CreateRecord
{
    protected static string $resource = HatResource::class;
}
