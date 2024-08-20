<?php

namespace App\Services;

use App\Models\Images;
use App\Models\Texts;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

final class ImageForm
{
    protected array $temporaryTypes = [];
    public static function schema(): array {
        $formInstance = new self();
        return[
            Grid::make(1)
            ->schema([
                TextInput::make('title')->required(),
                Textarea::make('description')->required()->autosize(),
                Select::make('type')
                    ->searchable()
                    ->options(function () use ($formInstance) {
                        // Kết hợp các tùy chọn từ cơ sở dữ liệu và tạm thời
                        $typesFromDb = Images::pluck('type', 'type')->toArray();
                        return array_merge($typesFromDb, $formInstance->temporaryTypes);
                    })
                    ->required()
                    ->createOptionForm([
                        TextInput::make('new_type')
                            ->label('New Type')
                            ->required(),
                    ])
                    ->createOptionUsing(function (array $data) use ($formInstance) {
                        // Thêm vào danh sách tùy chọn tạm thời
                        $formInstance->temporaryTypes[$data['new_type']] = $data['new_type'];
                        return $data['new_type'];
                    }),
                FileUpload::make('path')
                    ->image()
                    ->directory('/assets/images') 
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return time() . '_' . $file->getClientOriginalName();
                    })
                    ->required(),
            ]),
        ];
    }
}
