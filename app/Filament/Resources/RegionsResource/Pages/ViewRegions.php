<?php

namespace App\Filament\Resources\RegionsResource\Pages;

use App\Filament\Resources\RegionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRegions extends ViewRecord
{
    protected static string $resource = RegionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
