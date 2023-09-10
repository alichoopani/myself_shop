<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureCategoryResource\Pages;
use App\Filament\Resources\FeatureCategoryResource\RelationManagers;
use App\Models\Category;
use App\Models\Feature;
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
    protected static ?string $navigationGroup = 'Feature';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')->label('Category')->relationship('category', 'title')
                    ->getSearchResultsUsing(fn(string $search) => Category::query()
                        ->where('title', 'like', "%{$search}%")
                        ->limit(6)
                        ->pluck('title', 'id'))
                    ->required()->searchable(),
                Forms\Components\Select::make('feature_id')->label('Feature')->relationship('feature', 'title')
                    ->getSearchResultsUsing(fn(string $search) => Feature::query()
                        ->where('title', 'like', "%{$search}%")
                        ->limit(6)
                        ->pluck('title', 'id'))
                    ->required()->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('category.title')->label('Category'),
                Tables\Columns\TextColumn::make('feature.title')->label('Feature'),
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
