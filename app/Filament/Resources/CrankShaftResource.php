<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CrankShaftResource\Pages;
use App\Filament\Resources\CrankShaftResource\RelationManagers;
use App\Models\CrankShaft;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CrankShaftResource extends Resource
{
    protected static ?string $model = CrankShaft::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Model Name'),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/CrankShaft'),
                Forms\Components\TextInput::make('engine_name')->required()->label('Engine Name'),
                Forms\Components\Toggle::make('casting_method')->inline(false)
                    ->onIcon('heroicon-s-lightning-bolt')
                    ->required()->label('Forged'),
                Forms\Components\TextInput::make('weight')->label('Weight(Kg)')->numeric()->required(),
                Forms\Components\TextInput::make('number_of_cylinder')->label('Number Of Cylinder')->numeric()->required(),
                Forms\Components\TextInput::make('price')->required()->label('Price(Toman)')->numeric(),
                Forms\Components\Checkbox::make('warranty')->label('Warranty')->default(0),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand')->label('Brand'),
                Tables\Columns\TextColumn::make('name')->label('Model Name'),
                Tables\Columns\TextColumn::make('engine_name')->label('Engine Name'),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('price')->label('Price'),
                Tables\Columns\CheckboxColumn::make('warranty')->label('Warranty'),
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
            'index' => Pages\ListCrankShafts::route('/'),
            'create' => Pages\CreateCrankShaft::route('/create'),
            'edit' => Pages\EditCrankShaft::route('/{record}/edit'),
        ];
    }
}
