<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TShirtResource\Pages;
use App\Filament\Resources\TShirtResource\RelationManagers;
use App\Models\TShirt;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TShirtResource extends Resource
{
    protected static ?string $model = TShirt::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/T-Shirts'),
                Forms\Components\Select::make('size')->options([
                    'S' => 'S',
                    'L' => 'L',
                    'XL' => 'XL',
                    'XXL' => 'XXL',
                    '3XL' => '3XL'
                ])->required()->label('Size')->searchable(),
                Forms\Components\Select::make('color')->required()->label('Color')
                    ->options([
                        'Red' => 'Red',
                        'Blue' => 'Blue',
                        'Yellow' => 'Yellow',
                        'Pink' => 'Pink',
                        'Gray' => 'Gray',
                        'Green' => 'Green',
                        'Purple' => 'Purple',
                        'Black' => 'Black',
                        'White' => 'White'
                    ])
                    ->searchable(),
                Forms\Components\TextInput::make('price')->required()->label('Price')->numeric(),
                Forms\Components\Checkbox::make('warranty')->label('Warranty')->default(0),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('brand')->label('Brand'),
                Tables\Columns\TextColumn::make('size')->label('Size'),
                Tables\Columns\TextColumn::make('color')->label('Color'),
                Tables\Columns\TextColumn::make('price')->label('Price'),
                Tables\Columns\CheckboxColumn::make('warranty')->label('Warranty')->alignCenter(),
                Tables\Columns\CheckboxColumn::make('approved')->label('Approved')->alignCenter()
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
            'index' => Pages\ListTShirts::route('/'),
            'create' => Pages\CreateTShirt::route('/create'),
            'edit' => Pages\EditTShirt::route('/{record}/edit'),
        ];
    }
}
