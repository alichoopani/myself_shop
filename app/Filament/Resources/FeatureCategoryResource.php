<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureCategoryResource\Pages;
use App\Filament\Resources\FeatureCategoryResource\RelationManagers;
use App\Models\FeatureCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureCategoryResource extends Resource
{
    protected static ?string $model = FeatureCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label('Title')->required(),
                Forms\Components\Textarea::make('description')->label('Description')->nullable(),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextInputColumn::make('id')->label('ID'),
                Tables\Columns\TextInputColumn::make('title')->label('Title'),
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
            'index' => Pages\ListFeatureCategories::route('/'),
            'create' => Pages\CreateFeatureCategory::route('/create'),
            'edit' => Pages\EditFeatureCategory::route('/{record}/edit'),
        ];
    }
}
