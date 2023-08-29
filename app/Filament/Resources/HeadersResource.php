<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeadersResource\Pages;
use App\Filament\Resources\HeadersResource\RelationManagers;
use App\Models\Headers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeadersResource extends Resource
{
    protected static ?string $model = Headers::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/Headers'),
                Forms\Components\Textarea::make('description')->nullable()->label('Description'),
                Forms\Components\Select::make('material')->label('material')->required()->options([
                    'iron' => 'Iron',
                    'steel' => 'Stainless Steel'
                ]),
                Forms\Components\TextInput::make('car_model')->required()->label('Engine Model'),
                Forms\Components\TextInput::make('price')->required()->label('Price(Tooman)')->numeric(),
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
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('car_model')->label('Engine Model'),
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
            'index' => Pages\ListHeaders::route('/'),
            'create' => Pages\CreateHeaders::route('/create'),
            'edit' => Pages\EditHeaders::route('/{record}/edit'),
        ];
    }
}
