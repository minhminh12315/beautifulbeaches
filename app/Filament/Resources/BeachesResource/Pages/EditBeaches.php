<?php

namespace App\Filament\Resources\BeachesResource\Pages;

use App\Filament\Resources\BeachesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBeaches extends EditRecord
{
    protected static string $resource = BeachesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
