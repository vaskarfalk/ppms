<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\FeaturesSectionResource\Pages;
use App\Filament\Resources\Settings\FeaturesSectionResource\RelationManagers;
use App\Models\Settings\FeaturesSection;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeaturesSectionResource extends Resource
{
    protected static ?string $model = FeaturesSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';
    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Features Section')

                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->maxLength(255)
                                    ->default(null)
                                    ->required(),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->required()
                                    ->directory('features'),
                            ])

                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
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
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),

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
            'index' => Pages\ListFeaturesSections::route('/'),
            'create' => Pages\CreateFeaturesSection::route('/create'),
            'edit' => Pages\EditFeaturesSection::route('/{record}/edit'),
        ];
    }
}
