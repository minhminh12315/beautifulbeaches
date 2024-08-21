<?php

namespace App\Filament\Resources\TextsResource\Pages;

use App\Filament\Resources\TextsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTexts extends ListRecords
{
    protected static string $resource = TextsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
