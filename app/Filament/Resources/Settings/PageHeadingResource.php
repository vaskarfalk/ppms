<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\PageHeadingResource\Pages;
use App\Filament\Resources\Settings\PageHeadingResource\RelationManagers;
use App\Models\Settings\PageHeading;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Group;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\RedirectResponse;

class PageHeadingResource extends Resource
{
    protected static ?string $model = PageHeading::class;

    protected static ?string $navigationIcon = 'heroicon-o-percent-badge';
    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('Hero Section')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(255)
                                            ->default(null)
                                            ->columnSpanFull(),
                                        Forms\Components\Textarea::make('description')
                                            ->required()
                                            ->maxLength(255)
                                            ->default(null)
                                            ->columnSpanFull(),
                                        Forms\Components\FileUpload::make('G_rating_image')
                                            ->image()
                                            ->label('Google Rating Image')
                                            ->directory('page_heading')
                                            ->required()
                                            ->columnSpanFull(),


                                    ]),
                            ]),

                        Section::make('Why Choose Plymouth')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('why_title')
                                            ->maxLength(255)
                                            ->default(null)
                                            ->columnSpanFull(),

                                    ]),
                            ]),

                        Section::make('Who we are')
                            ->schema([

                                Forms\Components\FileUpload::make('who_image')
                                    ->image()
                                    ->label('Who We Are Image')
                                    ->directory('page_heading'),
                                Forms\Components\TextInput::make('who_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('who_subtitle')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\RichEditor::make('who_description')
                                    ->columnSpanFull(),

                            ]),



                        Section::make('Services')
                            ->schema([

                                Forms\Components\TextInput::make('service_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('service_subtitle')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('service_description')
                                    ->columnSpanFull(),

                            ]),




                        Section::make('Covered Section')
                            ->schema([

                                Forms\Components\FileUpload::make('covered_image')
                                    ->image()
                                    ->label('Covered Image')
                                    ->directory('page_heading'),
                                Forms\Components\TextInput::make('covered_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\RichEditor::make('covered_description')
                                    ->columnSpanFull(),

                            ]),



                        Section::make('Reviews')
                            ->schema([

                                Forms\Components\TextInput::make('review_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('review_subtitle')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('review_description')
                                    ->columnSpanFull(),

                            ]),


                        Section::make('About Page')
                            ->schema([
                                Forms\Components\FileUpload::make('about_bg_image')
                                    ->image()
                                    ->label('About Background Image')
                                    ->directory('page_heading'),

                                Forms\Components\TextInput::make('about_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('about_subtitle')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\FileUpload::make('ourstory_image')
                                    ->image()
                                    ->label('Our Story Image')
                                    ->directory('page_heading'),
                                Forms\Components\TextInput::make('ourstory_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('ourstory_subtitle')
                                    ->maxLength(255)
                                    ->default(null),

                                Forms\Components\MarkdownEditor::make('ourstory_description')
                                    ->columnSpanFull()
                                    ->fileAttachmentsDirectory('page_heading'),

                                Forms\Components\TextInput::make('whychoose_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('whychoose_subtitle')
                                    ->maxLength(255)
                                    ->default(null),

                                Forms\Components\FileUpload::make('whychoose_image')
                                    ->image()
                                    ->label('Why Choose Image')
                                    ->directory('page_heading'),

                                Forms\Components\MarkdownEditor::make('whychoose_description')
                                    ->columnSpanFull()
                                    ->fileAttachmentsDirectory('page_heading'),
                            ]),





                    ])->columnSpan(3),



                Group::make()
                    ->schema([
                        Section::make('Web Banners')
                            ->schema([
                                Forms\Components\Repeater::make('web_banner')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')
                                            ->label('Banner Image')
                                            ->image()
                                            ->directory('web_banner')
                                            ->required(),
                                        Forms\Components\TextInput::make('alt')
                                            ->label('Alt Text')
                                            ->maxLength(255)
                                            ->required(),
                                    ])

                            ]),
                        Section::make('Mobile Banners')
                            ->schema([
                                Forms\Components\Repeater::make('mob_banner')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')
                                            ->label('Mobile Banner Image')
                                            ->image()
                                            ->directory('web_banner')
                                            ->required(),
                                        Forms\Components\TextInput::make('alt')
                                            ->label('Alt Text')
                                            ->maxLength(255)
                                            ->required(),
                                    ])

                            ]),
                        Section::make('Button')
                            ->schema([
                                Forms\Components\TextInput::make('btn_1')
                                    ->maxLength(255)
                                    ->label('Explore Services')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_1_url')
                                    ->maxLength(255)
                                    ->label('Explore Services URL')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_2')
                                    ->maxLength(255)
                                    ->label('Who we are read more')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_2_url')
                                    ->maxLength(255)
                                    ->label('Who we are read more URL')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_3')
                                    ->maxLength(255)
                                    ->label('Covered Button')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_3_url')
                                    ->maxLength(255)
                                    ->label('Covered Button URL')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_4')
                                    ->maxLength(255)
                                    ->label('Reviews Button')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_4_url')
                                    ->maxLength(255)
                                    ->label('Reviews Button URL')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_5')
                                    ->maxLength(255)
                                    ->label('We Can Help Button')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_5_url')
                                    ->maxLength(255)
                                    ->label('We Can Help Button URL')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_6')
                                    ->maxLength(255)
                                    ->label('About Ourstory Button')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_6_url')
                                    ->maxLength(255)
                                    ->label('About Ourstory Button URL')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_7')
                                    ->maxLength(255)
                                    ->label('Why Choose Button')
                                    ->default(null),
                                Forms\Components\TextInput::make('btn_7_url')
                                    ->maxLength(255)
                                    ->label('Why Choose Button URL')
                                    ->default(null),
                                    
                            ]),
                        Section::make('We Can Help')
                            ->schema([

                                Forms\Components\TextInput::make('help_title')

                                    ->maxLength(255)

                                    ->default(null),
                            ]),


                        Section::make('Gallery Page')
                            ->schema([
                                Forms\Components\FileUpload::make('gallery_bg_image')
                                    ->image()
                                    ->label('Gallery Background Image')
                                    ->directory('page_heading'),
                                Forms\Components\TextInput::make('gallery_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('gallery_subtitle')
                                    ->maxLength(255)
                                    ->default(null),



                            ]),


                        Section::make('News Page')
                            ->schema([

                                Forms\Components\TextInput::make('news_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('news_subtitle')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\MarkdownEditor::make('news_description')
                                    ->columnSpanFull()
                                    ->fileAttachmentsDirectory('page_heading'),

                            ]),

                        Section::make('What We Do Page')
                            ->schema([

                                Forms\Components\TextInput::make('what_we_do_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('what_we_do_subtitle')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\MarkdownEditor::make('what_we_do_description')
                                    ->columnSpanFull()
                                    ->fileAttachmentsDirectory('page_heading'),

                            ]),


                        Section::make('Social Media')
                            ->schema([

                                Forms\Components\TextInput::make('facebook_link')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('instagram_link')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('twitter_link')
                                    ->maxLength(255)
                                    ->default(null),


                            ]),




                    ])->columnSpan(2),

                Group::make()
                    ->schema([
                        Section::make('Contact Page')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('contact_title')
                                            ->maxLength(255)
                                            ->default(null),

                                        Forms\Components\TextInput::make('contact_subtitle')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\FileUpload::make('contact_bg_image')
                                            ->image()
                                            ->label('Contact Background Image')
                                            ->directory('page_heading'),
                                        Forms\Components\TextInput::make('whatsapp_number')
                                            ->maxLength(255)
                                            ->default(null),
                                    ]),
                                Forms\Components\Grid::make()
                                    ->schema([
                                        Forms\Components\TextInput::make('contact_heading')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('contact_subheading')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('contact_number')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\TextInput::make('contact_email')
                                            ->maxLength(255)
                                            ->default(null),
                                        Forms\Components\Textarea::make('contact_address')
                                            ->default(null),

                                        Forms\Components\Textarea::make('contact_maps')
                                            ->default(null),

                                    ]),

                            ]),

                    ])->columnSpan(5),
            ])->columns(5);
    }




    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_1_url')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('G_rating_image'),
                Tables\Columns\TextColumn::make('why_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('who_image'),
                Tables\Columns\TextColumn::make('who_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('who_subtitle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_2_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_subtitle')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('covered_image'),
                Tables\Columns\TextColumn::make('covered_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_3_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('review_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('review_subtitle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_4_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('help_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_5')
                    ->searchable(),
                Tables\Columns\TextColumn::make('btn_5_url')
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



    public static function canCreate(): bool
    {
        return false;
    }



    public static function canDelete(Model $record): bool
    {
        return false; // Disable the "Delete" functionality
    }



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageHeadings::route('/'),
            // 'create' => Pages\CreatePageHeading::route('/create'),
            'edit' => Pages\EditPageHeading::route('/{record}/edit'),
            //    'edit' => Pages\EditPageHeading::route('/'),

        ];
    }
}
