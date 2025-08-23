<?php

namespace App\Filament\Resources\ResumeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SoftwareSkillsRelationManager extends RelationManager
{
    protected static string $relationship = 'softwareSkills';
    protected static ?string $title = 'Software Skills';
    protected static ?string $label = 'Software Skill';
    protected static ?string $pluralLabel = 'Software Skills';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('skills')
                    ->required()
                    ->maxLength(2000),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Software Skills')
            ->columns([
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('skills'),
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
