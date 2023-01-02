<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorksResource\Pages;
use App\Models\Works;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\HtmlString;
use Livewire\TemporaryUploadedFile;

class WorksResource extends Resource
{
    protected static ?string $model = Works::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(65535),
                    Forms\Components\Toggle::make('status')
                        ->default(true)
                        ->inline(false)
                        ->required(),
                    Forms\Components\TextInput::make('url')
                        ->url()
                        ->maxLength(65535),
                    Forms\Components\TextInput::make('github_url')
                        ->url()
                        ->maxLength(65535),
                ])->columns(2),
                Forms\Components\Card::make([
                    Forms\Components\Textarea::make('description_zh')
                        ->required()
                        ->maxLength(65535),
                    Forms\Components\Textarea::make('description_en')
                        ->required()
                        ->maxLength(65535),
                ])->columns(2),
                Forms\Components\FileUpload::make('picture_name')
                    ->disk('s3')
                    ->directory(Works::S3_PATH)
                    ->visibility('public')
                    ->preserveFilenames()
                    ->saveUploadedFileUsing(function (TemporaryUploadedFile $file) {
                        $fileName = $file->store(Works::S3_PATH, 's3');

                        return str($fileName)->explode('/')->last();
                    })
                    ->image()
                    ->required(fn(string $context) => $context === 'create')
                    ->hiddenOn('view'),
                Forms\Components\Placeholder::make('Image')
                    ->content(fn($record) => new HtmlString("<img src='$record->img_link' class='rounded' alt='Image'/>"))
                    ->visibleOn('view'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('img_link')->circular(),
                Tables\Columns\TextColumn::make('name')->grow(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWorks::route('/create'),
            'view' => Pages\ViewWorks::route('/{record}'),
            'edit' => Pages\EditWorks::route('/{record}/edit'),
        ];
    }
}
