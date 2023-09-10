<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureItemResource\Pages;
use App\Filament\Resources\FeatureItemResource\RelationManagers;
use App\Models\Feature;
use App\Models\FeatureItem;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureItemResource extends Resource
{
    protected static ?string $model = FeatureItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Feature';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label('Title'),
                Forms\Components\Textarea::make('description')->label('Description'),
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
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('feature.title')->label('Feature')
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
            'index' => Pages\ListFeatureItems::route('/'),
            'create' => Pages\CreateFeatureItem::route('/create'),
            'edit' => Pages\EditFeatureItem::route('/{record}/edit'),
        ];
    }
}
