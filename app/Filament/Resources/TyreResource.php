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
                Forms\Components\TextInput::make('size')->required()->label('Size')->numeric()->default(15),
                Forms\Components\TextInput::make('weight')->label('Weight(Kg)')->required()->default(2.5)->numeric(),
                Forms\Components\TextInput::make('width')->label('Width')->required()->default(255)->numeric(),
                Forms\Components\TextInput::make('grip')->label('Grip')->required()->default(400)->numeric(),
                Forms\Components\TextInput::make('top_speed_rating')->label('Top Speed Rating')->required()->default('H'),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand')->label('Brand'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('speed_rating')->label('Speed Rating'),
                Tables\Columns\TextColumn::make('size')->label('Size'),
                Tables\Columns\TextColumn::make('width')->label('Width'),
                Tables\Columns\TextColumn::make('grip')->label('Grip'),
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
            'index' => Pages\ListTyres::route('/'),
            'create' => Pages\CreateTyre::route('/create'),
            'edit' => Pages\EditTyre::route('/{record}/edit'),
        ];
    }
}
