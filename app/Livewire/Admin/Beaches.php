<?php

namespace App\Livewire\Admin;

use App\Models\Beaches as ModelsBeaches;
use App\Services\BeachesForm;
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

class Beaches extends Component implements HasTable, HasForms
{
    use WithFileUploads, InteractsWithTable, InteractsWithForms;

    public function render()
    {
        return view('livewire.admin.beaches');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(ModelsBeaches::query())
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Beach Name'),
                Tables\Columns\TextColumn::make('city.name')
                    ->label('City Name'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->url(function ($record) {
                        return Storage::url($record->image);
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver()
                    ->form(BeachesForm::schema()),
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
                    ->model(ModelsBeaches::class)
                    ->form(BeachesForm::schema())
                    ->after(function ($record) {
                        Log::info('Record created', ['record' => $record]);
                    })
            ]);
    }
}