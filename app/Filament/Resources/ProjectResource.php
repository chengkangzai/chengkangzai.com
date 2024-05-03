<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class ProjectResource extends Resource
{
    use Translatable;

    protected static ?string $model = Project::class;

    protected static ?string $slug = 'projects';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->columns(3)
            ->schema([
                Section::make([
                    TextInput::make('name')
                        ->required(),

                    SpatieTagsInput::make('tags')
                        ->required(),

                    Toggle::make('is_active')
                        ->inline(false)
                        ->required(),

                    TextInput::make('github_url')
                        ->suffixActions([
                            Action::make('preview')
                                ->icon('heroicon-o-arrow-top-right-on-square')
                                ->visible(fn(?string $state) => $state !== null)
                                ->url(fn(?string $state) => $state)
                        ])
                        ->url(),

                    TextInput::make('url')
                        ->suffixActions([
                            Action::make('preview')
                                ->icon('heroicon-o-arrow-top-right-on-square')
                                ->visible(fn(?string $state) => $state !== null)
                                ->url(fn(?string $state) => $state)
                        ])
                        ->url(),
                    SpatieMediaLibraryFileUpload::make('thumbnail')
                        ->required()
                        ->collection('thumbnail')
                        ->image()
                        ->imageEditor()
                        ->imageCropAspectRatio('16:9')
                        ->maxFiles(1),
                ])->compact()->columnSpan(2),

                Section::make([
                    TranslatableContainer::make(
                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->required(),
                    ),
                ])->compact()->columnSpan(1),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?Project $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?Project $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->collection('thumbnail'),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->limit(30)
                    ->tooltip(fn(?string $state) => $state),

                TextColumn::make('github_url')
                    ->toggleable()
                    ->toggledHiddenByDefault()
                    ->url(fn(?string $state) => $state, true),

                TextColumn::make('url')
                    ->toggleable()
                    ->toggledHiddenByDefault()
                    ->url(fn(?string $state) => $state, true),

                ToggleColumn::make('is_active'),
            ])
            ->reorderable('sort')
            ->defaultSort('sort')
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
