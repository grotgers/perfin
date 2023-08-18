<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OutcomeCategoryResource\Pages;
use App\Filament\Resources\OutcomeCategoryResource\RelationManagers;
use App\Models\OutcomeCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OutcomeCategoryResource extends Resource
{
    /**
     * @var string|null
     */
    protected static ?string $model = OutcomeCategory::class;

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
            'index' => Pages\ListOutcomeCategories::route('/'),
            'create' => Pages\CreateOutcomeCategory::route('/create'),
            'edit' => Pages\EditOutcomeCategory::route('/{record}/edit'),
        ];
    }
}
