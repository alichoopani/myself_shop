<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CamShaftResource\Pages;
use App\Filament\Resources\CamShaftResource\RelationManagers;
use App\Models\CamShaft;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CamShaftResource extends Resource
{
    protected static ?string $model = CamShaft::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/CamShafts'),
                Forms\Components\TextInput::make('engine_name')->required()->label('Engine Name'),
                Forms\Components\TextInput::make('description')->required()->label('Description'),
                Forms\Components\TextInput::make('application')->label('Application'),
                Forms\Components\TextInput::make('price')->required()->label('Price($)')->numeric(),
                Forms\Components\Checkbox::make('warranty')->label('Warranty')->default(0),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand')->label('Brand'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('engine_name')->label('Engine Model'),
                Tables\Columns\TextColumn::make('price')->label('Price($)'),
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
            'index' => Pages\ListCamShafts::route('/'),
            'create' => Pages\CreateCamShaft::route('/create'),
            'edit' => Pages\EditCamShaft::route('/{record}/edit'),
        ];
    }
}
