<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImagesResource\Pages;
use App\Filament\Resources\ImagesResource\RelationManagers;
use App\Models\Images;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ImagesResource extends Resource
{
    protected static ?string $model = Images::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    
    protected array $temporaryTypes = [];

    public static function form(Form $form): Form
    {
        $formInstance = new self();
        return $form
            ->schema([
                Forms\Components\FileUpload::make('path')
                    ->name('image')
                    ->directory('assets/images')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return time() . '_' . $file->getClientOriginalName();
                    })
                    ->required(),
                Forms\Components\Select::make('type')
                    ->required()
                    ->searchable()
                    ->options(Images::pluck('type', 'type'))
                    ->createOptionForm([
                        Forms\Components\TextInput::make('new_type')
                            ->label('New Type')
                            ->required(),
                    ])
                    
                    ->createOptionUsing(function (array $data) use ($formInstance) {
                        // Thêm vào danh sách tùy chọn tạm thời
                        $formInstance->temporaryTypes[$data['new_type']] = $data['new_type'];
                        return $data['new_type'];
                    }),

                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull()
                    ->autosize(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImages::route('/'),
            'create' => Pages\CreateImages::route('/create'),
            'view' => Pages\ViewImages::route('/{record}'),
            'edit' => Pages\EditImages::route('/{record}/edit'),
        ];
    }
}
