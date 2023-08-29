<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PistonResource\Pages;
use App\Filament\Resources\PistonResource\RelationManagers;
use App\Models\Piston;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PistonResource extends Resource
{
    protected static ?string $model = Piston::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('engine_name')->required()->label('Engine Name'),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/Pistons'),
                Forms\Components\TextInput::make('weight')->required()->label('Weight(Gr)')->numeric(),
                Forms\Components\TextInput::make('compression')->required()->label('Compression')->numeric(),
                Forms\Components\TextInput::make('bore')->required()->label('Bore(mm)')->numeric(),
                Forms\Components\TextInput::make('price')->required()->label('Price($)')->numeric(),
                Forms\Components\Textarea::make('description')->label('Description'),
                Forms\Components\Select::make('casting_method')->label('Casting Method')->required()->options([
                    'Forged' => 'Forged',
                    'Casted' => 'Casted'
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
                Tables\Columns\TextColumn::make('engine_name')->label('Name'),
                Tables\Columns\TextColumn::make('compression')->label('Compression'),
                Tables\Columns\TextColumn::make('bore')->label('Bore'),
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
            'index' => Pages\ListPistons::route('/'),
            'create' => Pages\CreatePiston::route('/create'),
            'edit' => Pages\EditPiston::route('/{record}/edit'),
        ];
    }
}
