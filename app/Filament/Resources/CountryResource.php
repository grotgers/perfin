<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use App\Filament\Resources\CountryResource\RelationManagers;
use App\Models\Country;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CountryResource extends Resource
{
    /**
     * @var string|null
     */
    protected static ?string $model = Country::class;

    /**
     * @var string|null
     */
    protected static ?string $navigationGroup = 'Settings';

    /**
     * @param Form $form
     *
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('iso_two_code'),
                Forms\Components\Select::make('currency_id')
                    ->relationship('currency', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
            ]);
    }

    /**
     * @param Table $table
     *
     * @return Table
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('iso_two_code'),
                Tables\Columns\TextColumn::make('currency.name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListCountries::route('/'),
            'create' => Pages\CreateCountry::route('/create'),
            'edit' => Pages\EditCountry::route('/{record}/edit'),
        ];
    }
}
