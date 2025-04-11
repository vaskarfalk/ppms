<?php

namespace App\Filament\Resources\Seo;

use App\Filament\Resources\Seo\SeoPagesResource\Pages;
use App\Models\Seo\SeoPages;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class SeoPagesResource extends Resource
{
    protected static ?string $model = SeoPages::class;
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';
    protected static ?string $navigationGroup = 'Seo';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('Home Page')
                            ->schema([
                                Forms\Components\TextInput::make('home_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('home_meta_description')
                                    ->columnSpanFull(),
                            ]),
                        Section::make('Gallery Page')
                            ->schema([

                                Forms\Components\TextInput::make('gallery_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('gallery_meta_description')
                                    ->columnSpanFull(),
                            ]),
                     
                        Section::make('What We Do Page')
                            ->schema([
                                Forms\Components\TextInput::make('whatwedo_meta_title')
                                    ->maxLength(255)
                                    ->default(null),

                                Forms\Components\Textarea::make('whatwedo_meta_description')
                                    ->columnSpanFull(),
                            ]),
                    
                        Section::make('Services Page')
                            ->schema([
                                Forms\Components\TextInput::make('services_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('services_meta_description')
                                    ->columnSpanFull(),

                            ]),
                   
                        Section::make('Terms and Conditions Page')
                            ->schema([
                                Forms\Components\TextInput::make('terms_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('terms_meta_description')
                                    ->columnSpanFull(),
                            ]),
                   
                    ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Section::make('About Page')
                            ->schema([
                                Forms\Components\TextInput::make('about_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('about_meta_description')
                                    ->columnSpanFull(),
                                    
                            ]),
                            Section::make('News Page')
                            ->schema([

                                Forms\Components\TextInput::make('news_meta_title')
                                    ->maxLength(255)
                                    ->default(null),

                                Forms\Components\Textarea::make('news_meta_description')
                                    ->columnSpanFull(),
                            ]),
                            Section::make('Testimonials Page')
                            ->schema([
                                Forms\Components\TextInput::make('testimonials_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('testimonials_meta_description')
                                    ->columnSpanFull(),

                            ]),
                            Section::make('Contact Page')
                            ->schema([
                                Forms\Components\TextInput::make('contact_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('contact_meta_description')
                                    ->columnSpanFull(),
                            ]),
                            Section::make('Privacy Policy Page')
                            ->schema([
                                Forms\Components\TextInput::make('policy_meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('policy_meta_description')
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpan(2),


            ])->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('home_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gallery_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('news_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('whatwedo_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('testimonials_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('services_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('terms_meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('policy_meta_title')
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

    public static function canCreate(): bool
    {
        return false;
    }



    public static function canDelete(Model $record): bool
    {
        return false; // Disable the "Delete" functionality
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
            'index' => Pages\ListSeoPages::route('/'),
            // 'create' => Pages\CreateSeoPages::route('/create'),
            'edit' => Pages\EditSeoPages::route('/{record}/edit'),
        ];
    }
}
