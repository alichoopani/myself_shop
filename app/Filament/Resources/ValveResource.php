<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ValveResource\Pages;
use App\Filament\Resources\ValveResource\RelationManagers;
use App\Models\Valve;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ValveResource extends Resource
{
    protected static ?string $model = Valve::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->required()->label('Brand'),
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\TextInput::make('weight')->required()->label('Weight')->numeric(),
                Forms\Components\TextInput::make('quantity')->required()->label('Quantity')->numeric(),
                Forms\Components\FileUpload::make('image')->required()->label('Image')->directory('/Valves'),
                Forms\Components\Select::make('material')->label('Material')->options([
                    'steel' => 'Steel',
                    'titanium' => 'Titanium',
                    'alloy' => 'Alloy'
                ])->searchable(),
                Forms\Components\TextInput::make('engine_model')->required()->label('Engine Model'),
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
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('engine_model')->label('Engine Model'),
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
            'index' => Pages\ListValves::route('/'),
            'create' => Pages\CreateValve::route('/create'),
            'edit' => Pages\EditValve::route('/{record}/edit'),
        ];
    }
}
