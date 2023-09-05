<?php

namespace App\Filament\Resources\OrderTransactionResource\Pages;

use App\Filament\Resources\OrderTransactionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderTransaction extends CreateRecord
{
    protected static string $resource = OrderTransactionResource::class;
}
