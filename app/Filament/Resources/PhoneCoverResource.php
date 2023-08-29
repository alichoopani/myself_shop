<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhoneCoverResource\Pages;
use App\Filament\Resources\PhoneCoverResource\RelationManagers;
use App\Models\PhoneCover;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PhoneCoverResource extends Resource
{
    protected static ?string $model = PhoneCover::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/PhoneCovers'),
                Forms\Components\TextInput::make('phone_model')->required()->label('Phone Model'),
                Forms\Components\TextInput::make('price')->required()->label('Price')->numeric(),
                Forms\Components\Select::make('color')->label('Color')->required()->options([
                    'White' => 'White',
                    'Black' => 'Black',
                    'Purple' => 'Purple',
                    'Red' => 'Red',
                    'Blue' => 'Blue',
                    'Yellow' => 'Yellow',
                    'Pink' => 'Pink',
                    'Gray' => 'Gray',
                    'Green' => 'Green'
                ]),
                Forms\Components\Select::make('material')->label('material')->required()->options([
                    'Leather' => 'Leather',
                    'Silicon' => 'Silicon',
                    'Plastic' => 'Plastic'
                ]),
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
                Tables\Columns\TextColumn::make('color')->label('Color'),
                Tables\Columns\TextColumn::make('phone_model')->label('Phone Model'),
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
            'index' => Pages\ListPhoneCovers::route('/'),
            'create' => Pages\CreatePhoneCover::route('/create'),
            'edit' => Pages\EditPhoneCover::route('/{record}/edit'),
        ];
    }
}
