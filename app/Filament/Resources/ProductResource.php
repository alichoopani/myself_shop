<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Product & Details';
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label('Title')->required(),
                Forms\Components\TextInput::make('slug')->label('Slug')->required(),
                Forms\Components\TextInput::make('description')->label('Description')->nullable(),
                Forms\Components\Select::make('category_id')->label('Category')->nullable()->searchable()
//                    ->relationship('categories', 'title')
                    ->getSearchResultsUsing(fn(string $search) => Category::query()
                        ->where('title', 'like', "%{$search}%")
                        ->limit(10)
                        ->pluck('title', 'id')),
                Forms\Components\Select::make('brand_id')->label('Brand')->nullable()->searchable()
//                    ->relationship('brand', 'title')
                    ->getSearchResultsUsing(fn(string $search) => Brand::query()
                        ->where('title', 'like', "%{$search}%")
                        ->limit(10)
                        ->pluck('title', 'id')),
                Forms\Components\Select::make('color_id')->label('Color')->nullable()->searchable()
//                    ->relationship('color', 'title')
                    ->getSearchResultsUsing(fn(string $search) => Color::query()
                        ->where('title', 'like', "%{$search}%")
                        ->limit(10)
                        ->pluck('title', 'id')),
                Forms\Components\FileUpload::make('image')->label('Image')->required()->directory('/products-image'),
                Forms\Components\FileUpload::make('images')->label('Images')->nullable()->multiple()->directory('/products-images'),
                Forms\Components\TextInput::make('guarantee')->label('Guarantee')->nullable(),
                Forms\Components\TextInput::make('unit')->label('Unit')->nullable(),
                Forms\Components\TextInput::make('dimension')->label('Dimension')->nullable(),
                Forms\Components\TextInput::make('weight')->label('Weight')->nullable()->numeric()
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->decimalPlaces(3)
                        ->decimalSeparator(',')),
                Forms\Components\TextInput::make('quantity')->label('Quantity')->numeric()->nullable(),
                Forms\Components\TextInput::make('ordering')->label('Ordering')->nullable(),
                Forms\Components\Select::make('status')->label('Status')->options([
                    'normal' => 'Normal',
                    'special' => 'Special',
                    'offer' => 'Offer',
                    'discount' => 'Discount'
                ]),
                Forms\Components\DateTimePicker::make('end_time')->label('End Time'),
                Forms\Components\TextInput::make('discount_rate')->label('Discount Rate')->nullable()->numeric()
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->decimalPlaces(3)
                        ->decimalSeparator(',')),
                Forms\Components\TextInput::make('buy_price')->label('Buy Price')->nullable()->numeric()
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->decimalPlaces(3)
                        ->decimalSeparator(',')),
                Forms\Components\TextInput::make('product_price')->label('Product Price')->nullable()->numeric()
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->decimalPlaces(3)
                        ->decimalSeparator(',')),
                Forms\Components\TextInput::make('discounted_price')->label('Discounted Price')->nullable()->numeric()
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->decimalPlaces(3)
                        ->decimalSeparator(',')),
                Forms\Components\TextInput::make('final_price')->label('Final Price')->nullable()->numeric()
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->decimalPlaces(3)
                        ->decimalSeparator(',')),
                Forms\Components\TextInput::make('hits')->label('Hits')->nullable()->numeric(),
                Forms\Components\Textarea::make('seo_title')->label('Seo Title')->nullable(),
                Forms\Components\Textarea::make('seo_description')->label('Seo Description')->nullable(),
                Forms\Components\Textarea::make('seo_keywords')->label('Seo Keywords')->nullable(),
                Forms\Components\Checkbox::make('approved')->label('Approved')->default(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('category.title')->label('Category'),
                Tables\Columns\TextColumn::make('brand.title')->label('Brand'),
                Tables\Columns\TextColumn::make('color.title')->label('Color'),
                Tables\Columns\TextColumn::make('image')->label(''),
                Tables\Columns\TextColumn::make('quantity')->label('Quantity'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('approved')->label('Approved')->a
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
