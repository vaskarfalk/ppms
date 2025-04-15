<?php

namespace App\Filament\Widgets;

use App\Models\ContactFormSubmission;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class ContactSubmissionsTable extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Recent Book Online Enquiry';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                ContactFormSubmission::latest()
            )
            ->columns([
                TextColumn::make('fname')->label('First Name')->searchable()->sortable(),
                TextColumn::make('lname')->label('Last Name')->searchable()->sortable(),
                TextColumn::make('email')->label('Email')->searchable()->sortable(),
                TextColumn::make('services')->label('Services')->searchable(),
                TextColumn::make('message')->label('Message')->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Submitted At')
                    ->dateTime()
                    ->sortable(),
                    

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                ViewAction::make()
                ->form([
                    TextInput::make('fname')->label('First Name')->disabled(),
                    TextInput::make('lname')->label('Last Name')->disabled(),
                    TextInput::make('email')->label('Email')->disabled(),
                    TextInput::make('services')->label('Services')->disabled(),
                    Textarea::make('message')->label('Message')->disabled(),
                  
                ]),
           
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(), // Add a bulk delete action
            ]);
    }
}
