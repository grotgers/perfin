<?php

namespace App\Filament\Resources\OutcomeCategoryResource\Pages;

use App\Filament\Resources\OutcomeCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOutcomeCategories extends ListRecords
{
    protected static string $resource = OutcomeCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
