<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeachesResource\Pages;
use App\Filament\Resources\BeachesResource\RelationManagers;
use App\Models\Beaches;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BeachesResource extends Resource
{
    protected static ?string $model = Beaches::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('city_id')
                    ->required()
                    ->relationship('city', 'name'),
                TextInput::make('status')
                    ->required()
                    ->maxLength(255)
                    ->default('active'),
                TextInput::make('type')
                    ->maxLength(255)
                    ->default('good'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->directory('/assets/images')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return time() . '_' . $file->getClientOriginalName();
                    })
                    ->columnSpanFull(),

                // Beach Section
                Section::make('Beach Sections')
                    ->schema([
                        Repeater::make('beachSections')
                            ->relationship('beachSections')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),
                                Select::make('beach_id')
                                ->default(fn ($get) => $get('id'))  // Lấy giá trị id của beach hiện tại
                                ->hidden(),
                                Textarea::make('description')
                                    ->required()
                                    ->columnSpanFull(),
                                TextInput::make('status')
                                    ->required()
                                    ->maxLength(255)
                                    ->default('active')
                                    ->columnSpan(1),
                                TextInput::make('type')
                                    ->maxLength(255)
                                    ->default('good')
                                    ->columnSpan(1),
                                Repeater::make('beachImages')
                                    ->relationship('beachImages') // Quan hệ HasMany
                                    ->schema([
                                        FileUpload::make('path')
                                            ->image()
                                            ->required()
                                            ->label('Upload Image')
                                    ])
                                    ->minItems(1) // Số lượng tối thiểu
                                    ->maxItems(5) // Số lượng tối đa
                                    ->columnSpanFull(),

                            ])
                            ->columns(2)
                            ->minItems(0)
                            ->maxItems(10)
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->height('230px'),
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
            'index' => Pages\ListBeaches::route('/'),
            'create' => Pages\CreateBeaches::route('/create'),
            'view' => Pages\ViewBeaches::route('/{record}'),
            'edit' => Pages\EditBeaches::route('/{record}/edit'),
        ];
    }
}
