<?php

namespace App\Filament\Resources\TextsResource\Pages;

use App\Filament\Resources\TextsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTexts extends ViewRecord
{
    protected static string $resource = TextsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
