<?php

namespace App\Filament\Resources\ImagesResource\Pages;

use App\Filament\Resources\ImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImages extends EditRecord
{
    protected static string $resource = ImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
