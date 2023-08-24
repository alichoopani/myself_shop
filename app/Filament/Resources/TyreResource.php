<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TyreResource\Pages;
use App\Filament\Resources\TyreResource\RelationManagers;
use App\Models\Tyre;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TyreResource extends Resource
{
    protected static ?string $model = Tyre::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')->label('Brand')->required(),
                Forms\Components\TextInput::make('name')->label('Name')->required(),
                Forms\Components\FileUpload::make('image')->label('Image')->required(),
                Forms\Components\TextInput::make('speed_rating')->label('Speed Rating')->required(),
                Forms\Components\TextInput::make('structure')->label('Structure')->required()->default('Radial'),
                Forms\Components\TextInput::make('load_index')->label('Load Index')->required(),
                Forms\Components\DatePicker::make('create_week')->required()->label('Create Week'),
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
            'index' => Pages\ListTyres::route('/'),
            'create' => Pages\CreateTyre::route('/create'),
            'edit' => Pages\EditTyre::route('/{record}/edit'),
        ];
    }
}
