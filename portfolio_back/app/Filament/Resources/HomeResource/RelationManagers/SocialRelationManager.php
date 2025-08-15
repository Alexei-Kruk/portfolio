<?php

namespace App\Filament\Resources\HomeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class SocialRelationManager extends RelationManager
{
    protected static string $relationship = 'socials';
    protected static ?string $title = 'Social';
    protected static ?string $label = 'Social';
    protected static ?string $pluralLabel = 'Social';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('platform')
                ->required()->maxLength(255),
            Forms\Components\TextInput::make('url')
                ->required()->maxLength(255),
            Forms\Components\FileUpload::make('icon')
                ->required()->maxSize(1024)->acceptedFileTypes(['image/*']),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('platform')
                ->searchable()->sortable(),
            Tables\Columns\TextColumn::make('url')
                ->searchable()->sortable(),
            Tables\Columns\TextColumn::make('icon')
                ->searchable()->sortable(),
        ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
