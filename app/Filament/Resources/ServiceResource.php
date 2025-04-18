<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Markdown;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Kahusoftware\FilamentCkeditorField\CKEditor;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Service')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->dehydrated()
                                    ->unique(Service::class, 'slug', ignoreRecord: true),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->required()
                                    ->directory('services'),

                                Forms\Components\FileUpload::make('icon')
                                    ->image()
                                    ->required()
                                    ->directory('services'),

                                Forms\Components\Textarea::make('excerpt')
                                    ->required()

                                    ->label('Short Description')
                                    ->default(null),

                                Forms\Components\Toggle::make('is_active')
                                    ->required()
                                    ->default(true),
                                Forms\Components\RichEditor::make('short_content')
                                    ->required()
                                    ->label('Short Content')
                                    ->default(null)
                                    ->fileAttachmentsDirectory('services')
                                    ->columnSpanFull(),
                            ]),

                    ]),
                    Section::make('Service Image')
                    ->schema([
                        Forms\Components\Repeater::make('images')
                            ->label('Service Image')
                            ->required() 
                             ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->label('Service Image')
                                    ->directory('services')
                                    ->required(),
                            ]),
                    ]),
                Section::make('Description')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                CKEditor::make('content')
                                    ->required()
                                    ->label('Description')
                                    ->uploadUrl(null)
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Section::make('SEO')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('meta_description')
                                    ->nullable(),
                            ]),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),

                    Tables\Columns\ImageColumn::make('icon'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

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
                Tables\Filters\Filter::make('is_active')
                    ->query(fn(Builder $query): Builder => $query->where('is_active', true))
                    ->label('Active'),
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
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
