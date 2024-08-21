<?php

namespace App\Filament\Resources\BeachesResource\Pages;

use App\Filament\Resources\BeachesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeaches extends ListRecords
{
    protected static string $resource = BeachesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
