<?php

namespace App\Livewire\Admin;

use App\Models\Beaches as ModelsBeaches;
use App\Models\Images;
use App\Services\BeachesForm;
use App\Services\ImageForm;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Image extends Component implements HasTable, HasForms
{
    use WithFileUploads, InteractsWithTable, InteractsWithForms;
    
    public function render()
    {
        return view('livewire.admin.image');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Images::query())
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->label('ID'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('path')
                ->label('Image Path')
                ->formatStateUsing(function ($state) {
                    // Chỉ cần phần đường dẫn tương đối
                    return '<img src="/storage/'.$state.'" width="250px" height="auto">';
                })
                ->html()
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->slideOver()
                ->form(function ($record) {
                    // Truyền dữ liệu của bản ghi hiện tại vào schema của form
                    Log::info($record);
                    return ImageForm::schema($record);
                }),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation(),
                Tables\Actions\ViewAction::make()
                    ->slideOver()
                    ->viewData([
                        'recordId' => function ($record) {
                            return $record->id;
                        },
                    ])
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->slideOver()
                    ->model(Images::class)
                    ->form(ImageForm::schema())
                    ->after(function ($record) {
                        Log::info('Record created', ['record' => $record]);
                    })
            ]);
    }
}
