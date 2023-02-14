<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleConfigResource\Pages;
use App\Models\ScheduleConfig;
use ApuSchedule;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class ScheduleConfigResource extends Resource
{
    protected static ?string $model = ScheduleConfig::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Uni Life';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('intake_code')
                    ->searchable()
                    ->reactive()
                    ->preload()
                    ->options(ApuSchedule::getIntakes()->mapWithKeys(fn ($i) => [$i => $i]))
                    ->afterStateUpdated(function (Closure $set, Closure $get, string $context) {
                        if ($context !== 'create') {
                            return;
                        }

                        if ($get('intake_code')) {
                            $grouping = ApuSchedule::getGroupings($get('intake_code'))->mapWithKeys(fn ($i) => [$i => $i]);
                            $set('grouping', $grouping->first());
                        }
                    })
                    ->required(),
                Forms\Components\Select::make('grouping')
                    ->reactive()
                    ->options(function (Closure $get) {
                        if ($get('intake_code')) {
                            return ApuSchedule::getGroupings($get('intake_code'))->mapWithKeys(fn ($i) => [$i => $i]);
                        }

                        return [];
                    })
                    ->required(),
                Forms\Components\Select::make('except')
                    ->reactive()
                    ->options(function (Closure $get) {
                        if ($get('intake_code') && $get('grouping')) {
                            return ApuSchedule::getMODID($get('intake_code'), $get('grouping'))
                                ->mapWithKeys(fn ($i) => [$i => $i]);
                        }

                        return [];
                    })
                    ->multiple(),
                Forms\Components\Toggle::make('is_subscribed')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('intake_code'),
                Tables\Columns\TextColumn::make('grouping'),
                Tables\Columns\TextColumn::make('except'),
                Tables\Columns\IconColumn::make('is_subscribed')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListScheduleConfigs::route('/'),
            'create' => Pages\CreateScheduleConfig::route('/create'),
            'edit' => Pages\EditScheduleConfig::route('/{record}/edit'),
            'view' => Pages\ViewScheduleConfig::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return true;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereBelongsTo(auth()->user());
    }
}
