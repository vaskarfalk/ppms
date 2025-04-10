<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\TermsAndConditionsResource\Pages;
use App\Filament\Resources\Settings\TermsAndConditionsResource\RelationManagers;
use App\Models\Settings\TermsAndConditions;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Kahusoftware\FilamentCkeditorField\CKEditor;

class TermsAndConditionsResource extends Resource
{
    protected static ?string $model = TermsAndConditions::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Terms And Conditions')
                ->schema([
                    Forms\Components\Grid::make()
                    ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(255)
                    ->default(null),
           
                    CKEditor::make('content')
                    ->uploadUrl(null)       
                   ->columnSpanFull(),

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
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
            'index' => Pages\ListTermsAndConditions::route('/'),
            'create' => Pages\CreateTermsAndConditions::route('/create'),
            'edit' => Pages\EditTermsAndConditions::route('/{record}/edit'),
        ];
    }
}
