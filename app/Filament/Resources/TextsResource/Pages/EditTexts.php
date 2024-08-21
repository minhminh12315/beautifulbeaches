<?php

namespace App\Filament\Resources\TextsResource\Pages;

use App\Filament\Resources\TextsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTexts extends EditRecord
{
    protected static string $resource = TextsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
