<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\PostResource\Pages;
use App\Filament\Resources\Blog\PostResource\RelationManagers;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Kahusoftware\FilamentCkeditorField\CKEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'News';
    protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Post')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->dehydrated()
                                    ->unique(Post::class, 'slug', ignoreRecord: true),

                            ]),
                        Forms\Components\Grid::make()
                            ->schema([
                                Select::make('categories')
                                    // ->relationship('category', 'name')
                                    ->options(Category::pluck('name', 'id')->toArray())
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->multiple()
                                    ->label('Category'),

                                Forms\Components\Toggle::make('is_active')
                                    ->required()
                                    ->default(true),
                                Forms\Components\Textarea::make('excerpt')
                                    ->label('Short Description')
                                    ->required(),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->label('Featured Image')
                                    ->openable()
                                    ->directory('posts')
                                    ->required(),
                            ]),
                            CKEditor::make('content')
                            ->uploadUrl(null)   
                            ->label('Description') 
                            ->required()   
                            ->columnSpanFull(),                    

                    ]),

                Section::make('SEO')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\Textarea::make('meta_description')
                                    ->maxLength(255)
                                    ->default(null),
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
                Tables\Columns\TextColumn::make('categories')
                    ->label('Category')
                    ->formatStateUsing(function ($state) {
                        $categoryIds = is_array($state) ? $state : explode(',', $state);
                        $categories = Category::whereIn('id', $categoryIds)->get();
                        return $categories->pluck('name')->implode(', ');
                    })
               
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
