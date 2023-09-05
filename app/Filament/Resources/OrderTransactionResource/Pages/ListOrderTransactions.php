<?php

namespace App\Filament\Resources\OrderTransactionResource\Pages;

use App\Filament\Resources\OrderTransactionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderTransactions extends ListRecords
{
    protected static string $resource = OrderTransactionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
