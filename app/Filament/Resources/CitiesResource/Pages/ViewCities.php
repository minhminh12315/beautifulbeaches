<?php

namespace App\Filament\Resources\CitiesResource\Pages;

use App\Filament\Resources\CitiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCities extends ViewRecord
{
    protected static string $resource = CitiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
