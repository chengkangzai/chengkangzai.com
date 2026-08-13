<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages\CreateProject;
use App\Filament\Resources\ProjectResource\Pages\EditProject;
use App\Filament\Resources\ProjectResource\Pages\ListProjects;
use App\Models\Project;
use Filament\Actions\EditAction;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Parfaitementweb\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class ProjectResource extends Resource
{
    use Translatable;

    protected static ?string $model = Project::class;

    protected static ?string $slug = 'projects';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema->columns(3)
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
                        ->url(),

                    TextInput::make('url')
                        ->url(),
                    SpatieMediaLibraryFileUpload::make('thumbnail')
                        ->required()
                        ->collection('thumbnail')
                        ->image()
                        ->imageEditor()
                        ->imageAspectRatio('16:9')
                        ->automaticallyCropImagesToAspectRatio()
                        ->maxFiles(1),
                ])->compact()->columnSpan(2),

                Section::make([
                    TranslatableContainer::make(
                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->required(),
                    ),
                ])->compact()->columnSpan(1),

                TextEntry::make('created_at')
                    ->label('Created Date')
                    ->state(fn (?Project $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                TextEntry::make('updated_at')
                    ->label('Last Modified Date')
                    ->state(fn (?Project $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
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
                    ->tooltip(fn (?string $state) => $state),

                TextColumn::make('github_url')
                    ->toggleable()
                    ->url(fn (?string $state) => $state, true),

                TextColumn::make('url')
                    ->toggleable()
                    ->url(fn (?string $state) => $state, true),

                ToggleColumn::make('is_active'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
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
