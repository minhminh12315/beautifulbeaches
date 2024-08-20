<?php

namespace App\Livewire\Admin;

use App\Models\Beaches as ModelsBeaches;
use App\Models\Texts;
use App\Services\ContentForm;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use Filament\Tables\Enums\ActionsPosition;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Content extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;
   
    public function render()
    {
        return view('livewire.admin.content');
    }

    public function table(Table $table): Table {
        return $table
        ->query(Texts::query())
        ->columns([
            Tables\Columns\TextColumn::make('id')
                ->label('ID'),
            Tables\Columns\TextColumn::make('content')
                ->label('Content'),
            Tables\Columns\TextColumn::make('type')
                ->label('Type')
        ])
        ->actions([
            Tables\Actions\EditAction::make()
                ->slideover()
                ->form(ContentForm::schema()),
            Tables\Actions\DeleteAction::make()
                ->requiresConfirmation(),
        ])
        ->headerActions([
            Tables\Actions\CreateAction::make()
                ->slideOver()
                ->model(Texts::class)
                ->form(ContentForm::schema())
                ->after(function ($record) {
                    Log::info('Record created', ['record' => $record]);
                })
        ]);;
    }
}
