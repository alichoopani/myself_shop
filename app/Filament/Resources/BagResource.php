<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BagResource\Pages;
use App\Filament\Resources\BagResource\RelationManagers;
use App\Models\Bag;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BagResource extends Resource
{
    protected static ?string $model = Bag::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\FileUpload::make('image')->required()->label('Image'),
                Forms\Components\Select::make('material')->required()->label('Material')->options([
                    'leather' => 'Leather',
                    'plastic' => 'Plastic',
                    'alcantra' => 'Alcantara',
                    'cloth' => 'Cloth'
                ]),
                Forms\Components\TextInput::make('height')->required()->label('Height')->numeric(),
                Forms\Components\TextInput::make('width')->required()->label('Width')->numeric(),
                Forms\Components\TextInput::make('length')->required()->label('Length')->numeric(),
                Forms\Components\TextInput::make('weight')->required()->label('Weight')->numeric(),
                Forms\Components\TextInput::make('price')->required()->label('Price')->numeric(),
                Forms\Components\Select::make('color')->required()->label('Color')
                    ->options(['Red', 'Blue', 'Yellow', 'Pink', 'Gray', 'Green', 'Purple', 'Black', 'White'])
                    ->searchable(),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListBags::route('/'),
            'create' => Pages\CreateBag::route('/create'),
            'edit' => Pages\EditBag::route('/{record}/edit'),
        ];
    }
}
