<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HatResource\Pages;
use App\Filament\Resources\HatResource\RelationManagers;
use App\Models\Hat;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HatResource extends Resource
{
    protected static ?string $model = Hat::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\Textarea::make('description')->label('Description'),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/Hats'),
                Forms\Components\Select::make('material')->required()->options(['Plastic', 'Cotton'])->label('Material'),
                Forms\Components\Select::make('color')->required()->label('Color')
                    ->options(['-' ,'White', 'Black', 'Purple', 'Red', 'Blue', 'Yellow', 'Pink', 'Gray', 'Green'])
                    ->searchable(),
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
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('material')->label('Material'),
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
            'index' => Pages\ListHats::route('/'),
            'create' => Pages\CreateHat::route('/create'),
            'edit' => Pages\EditHat::route('/{record}/edit'),
        ];
    }
}
