<?php

namespace App\Filament\Resources\RoleResource\RelationManagers;

use App\Filament\Resources\UserResource;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;

class UsersRelationManager extends RelationManager
{
    protected static string $relationship = 'users';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return UserResource::form($form);
    }

    public static function table(Table $table): Table
    {
        return UserResource::table($table);
    }
}
