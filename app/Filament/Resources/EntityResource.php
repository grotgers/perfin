<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntityResource\Pages;
use App\Filament\Resources\EntityResource\RelationManagers;
use App\Models\Entity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntityResource extends Resource
{
    /**
     * @var string|null
     */
    protected static ?string $model = Entity::class;

    /**
     * @var string|null
     */
    protected static ?string $navigationIcon = 'heroicon-o-building-library';

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
                Forms\Components\Select::make('country_id')
                    ->relationship('country', 'name')
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
                Tables\Columns\TextColumn::make('country.name'),
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

    /**
     * @return array|\Filament\Resources\RelationManagers\RelationGroup[]|\Filament\Resources\RelationManagers\RelationManagerConfiguration[]|string[]
     */
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    /**
     * @return array|\Filament\Resources\Pages\PageRegistration[]
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEntities::route('/'),
            'create' => Pages\CreateEntity::route('/create'),
            'edit' => Pages\EditEntity::route('/{record}/edit'),
        ];
    }
}
