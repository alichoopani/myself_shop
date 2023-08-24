<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressResource\Pages;
use App\Filament\Resources\AddressResource\RelationManagers;
use App\Models\Address;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class AddressResource extends Resource
{
    protected static ?string $model = Address::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')->hidden(\auth()->id()),
                Forms\Components\Select::make('province_id')->required()->label('Province')->searchable(),
                Forms\Components\Select::make('city_id')->required()->label('City')->searchable(),
                Forms\Components\TextInput::make('postal_code')->required()->label('Postal Code'),
                Forms\Components\TextInput::make('postal_address')->required()->label('Postal Address'),
                Forms\Components\TextInput::make('plate_number')->required()->label('Plate Number'),
                Forms\Components\TextInput::make('floor')->required()->label('Floor'),
                Forms\Components\TextInput::make('latitude'),
                Forms\Components\TextInput::make('longitude'),
                Forms\Components\TextInput::make('receiver_firstname')->required()->label('Receiver Firstname'),
                Forms\Components\TextInput::make('receiver_lastname')->required()->label('Receiver Lastname'),
                Forms\Components\TextInput::make('receiver_cellphone')->required()->label('Receiver Cellphone'),
                Forms\Components\Checkbox::make('approved')->default(1),
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
            'index' => Pages\ListAddresses::route('/'),
            'create' => Pages\CreateAddress::route('/create'),
            'edit' => Pages\EditAddress::route('/{record}/edit'),
        ];
    }
}
