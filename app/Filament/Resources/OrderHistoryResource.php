<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderHistoryResource\Pages;
use App\Filament\Resources\OrderHistoryResource\RelationManagers;
use App\Models\OrderHistory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderHistoryResource extends Resource
{
    protected static ?string $model = OrderHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('user_id')->label('User Id'),
                Tables\Columns\TextColumn::make('order_id')->label('Order Id'),
                Tables\Columns\TextColumn::make('note')->label('Note'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\CheckboxColumn::make('approved')->label('Approved')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrderHistories::route('/'),
            'create' => Pages\CreateOrderHistory::route('/create'),
            'edit' => Pages\EditOrderHistory::route('/{record}/edit'),
        ];
    }
}
