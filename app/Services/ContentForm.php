<?php

namespace App\Services;

use App\Models\Texts;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

final class ContentForm
{
    protected array $temporaryTypes = [];
    public static function schema(): array {
        $formInstance = new self();
        return[
            Grid::make(1)
            ->schema([
                Textarea::make('content')->required()->autosize(),
                Select::make('type')
                    ->searchable()
                    ->options(Texts::pluck('type', 'type'))
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
            ]),
        ];
    }
}
