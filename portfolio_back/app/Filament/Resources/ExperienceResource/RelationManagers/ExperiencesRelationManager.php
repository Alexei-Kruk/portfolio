<?php

namespace App\Filament\Resources\ExperienceResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperiencesRelationManager extends RelationManager
{
    protected static string $relationship = 'experiences';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('position')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextArea::make('short_description')
                    ->required()
                    ->maxLength(1000),
                Forms\Components\TextInput::make('date_from')
                    ->required()
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y'))
                    ->label('Year From'),
                Forms\Components\TextInput::make('date_to')
                    ->required()
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y'))
                    ->label('Year To'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Experience')
            ->columns([
                Tables\Columns\TextColumn::make('company_name'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('short_description'),
                Tables\Columns\TextColumn::make('date_from'),
                Tables\Columns\TextColumn::make('date_to'),
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
