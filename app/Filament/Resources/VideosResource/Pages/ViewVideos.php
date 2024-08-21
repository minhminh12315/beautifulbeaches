<?php

namespace App\Filament\Resources\VideosResource\Pages;

use App\Filament\Resources\VideosResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVideos extends ViewRecord
{
    protected static string $resource = VideosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
