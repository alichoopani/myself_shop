<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WheelResource\Pages;
use App\Filament\Resources\WheelResource\RelationManagers;
use App\Models\Wheel;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WheelResource extends Resource
{
    protected static ?string $model = Wheel::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->label('Brand')->required(),
                Forms\Components\TextInput::make('name')->label('Model')->required(),
                Forms\Components\FileUpload::make('image')->label('Image')->required()->directory('/Wheels'),
                Forms\Components\TextInput::make('size')->required()->label('Size')->numeric()->default(15),
                Forms\Components\TextInput::make('weight')->label('Weight(Kg)')->required()->default(8.5)->numeric(),
                Forms\Components\TextInput::make('width')->label('Width(In)')->required()->numeric(),
                Forms\Components\Select::make('color')->required()->searchable()->options([
                    'black' => 'Black',
                    'gray' => 'Gray',
                    'silver' => 'Silver',
                    'white' => 'White',
                    'bronze' => 'Bronze',
                    'chrome' => 'Chrome',
                    'etc' => 'ETC'
                ]),
                Forms\Components\TextInput::make('lug_nut_form')->label('Lug Nut Form(degree)')->required()->default(108),
                Forms\Components\TextInput::make('price')->label('Price')->required()->numeric(),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('brand')->label('Brand'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('size')->label('Size'),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('weight')->label('Weight'),
                Tables\Columns\TextColumn::make('price')->label('Price'),
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
            'index' => Pages\ListWheels::route('/'),
            'create' => Pages\CreateWheel::route('/create'),
            'edit' => Pages\EditWheel::route('/{record}/edit'),
        ];
    }
}
