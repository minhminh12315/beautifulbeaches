<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TextsResource\Pages;
use App\Filament\Resources\TextsResource\RelationManagers;
use App\Models\Texts;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TextsResource extends Resource
{
    protected static ?string $model = Texts::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected array $temporaryTypes = [];
    public static function form(Form $form): Form
    {
        $formInstance = new self();
        return $form
            ->schema([
                Textarea::make('content')
                    ->required()
                    ->autosize()
                    ->columnSpanFull(),
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
                    })
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('content')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
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
            'index' => Pages\ListTexts::route('/'),
            'create' => Pages\CreateTexts::route('/create'),
            'view' => Pages\ViewTexts::route('/{record}'),
            'edit' => Pages\EditTexts::route('/{record}/edit'),
        ];
    }
}
