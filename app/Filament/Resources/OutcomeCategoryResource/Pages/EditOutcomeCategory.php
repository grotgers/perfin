<?php

namespace App\Filament\Resources\OutcomeCategoryResource\Pages;

use App\Filament\Resources\OutcomeCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOutcomeCategory extends EditRecord
{
    protected static string $resource = OutcomeCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
