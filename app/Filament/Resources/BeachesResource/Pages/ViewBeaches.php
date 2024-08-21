<?php

namespace App\Filament\Resources\BeachesResource\Pages;

use App\Filament\Resources\BeachesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBeaches extends ViewRecord
{
    protected static string $resource = BeachesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
