<?php

namespace App\Services;

use App\Models\Cities;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\FileUpload;

final class BeachesForm
{
    public static function schema(): array
    {
        return [
            Grid::make(1)
                ->schema([
                    TextInput::make('name')
                        ->required(),
                    TextInput::make('description')
                        ->required(),
                    Select::make('city_id')
                        ->required()
                        ->searchable()
                        ->options(
                            Cities::pluck('name', 'id')
                        ),
                    FileUpload::make('image')
                        ->image()
                        ->directory('assets/images') 
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                            return time() . '_' . $file->getClientOriginalName();
                        })
                        ->required(),
                ])
        ];
    }
}