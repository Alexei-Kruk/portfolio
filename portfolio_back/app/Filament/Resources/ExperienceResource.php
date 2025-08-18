<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-pointing-out';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Experience';
    protected static ?string $pluralModelLabel = 'Experience';
    protected static ?string $modelLabel = 'Experience';
    protected static ?string $slug = 'experience';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->label('Company Name'),
                Forms\Components\TextInput::make('position')
                    ->required()
                    ->label('Position'),
                Forms\Components\Textarea::make('short_description')
                    ->required()
                    ->label('Short Description'),
                Forms\Components\TextInput::make('date_from')
                    ->label('Year From')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y'))
                    ->maxLength(4),

                Forms\Components\TextInput::make('date_to')
                    ->label('Year To')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y'))
                    ->maxLength(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')
                    ->label('Company Name'),
                Tables\Columns\TextColumn::make('position')
                    ->label('Position'),
                Tables\Columns\TextColumn::make('date_from')
                    ->label('Date From'),
                Tables\Columns\TextColumn::make('date_to')
                    ->label('Date To'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            RelationManagers\ResultsRelationManager::class,
            RelationManagers\StacksRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
