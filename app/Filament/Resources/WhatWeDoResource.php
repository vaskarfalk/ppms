<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatWeDoResource\Pages;
use App\Filament\Resources\WhatWeDoResource\RelationManagers;
use App\Models\WhatWeDo;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WhatWeDoResource extends Resource
{
    protected static ?string $model = WhatWeDo::class;

    protected static ?string $navigationIcon = 'heroicon-o-cursor-arrow-rays';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('What We Do')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required(),

                                        Forms\Components\TextInput::make('sub_title')
                                            ->maxLength(255)
                                            ->default(null),
                                    ]),
                            ]),
                        Section::make('What We Do Image')
                            ->schema([
                                Forms\Components\MarkdownEditor::make('description')
                                    ->columnSpanFull()
                                    ->required()
                                    ->fileAttachmentsDirectory('what-we-do'),
                            ])

                    ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Section::make('Button')
                            ->schema([
                                Forms\Components\TextInput::make('button_name')
                                    ->maxLength(255)
                                    ->default(null)
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->default(null)
                                    ->url()
                                    ->required(),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->required()
                                    ->directory('what-we-do'),

                            ]),

                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sub_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_name')
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
            'index' => Pages\ListWhatWeDos::route('/'),
            'create' => Pages\CreateWhatWeDo::route('/create'),
            'edit' => Pages\EditWhatWeDo::route('/{record}/edit'),
        ];
    }
}
