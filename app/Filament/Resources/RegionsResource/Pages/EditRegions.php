<?php

namespace App\Filament\Resources\RegionsResource\Pages;

use App\Filament\Resources\RegionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegions extends EditRecord
{
    protected static string $resource = RegionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
