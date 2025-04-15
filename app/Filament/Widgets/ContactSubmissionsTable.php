<?php

namespace App\Filament\Widgets;

use App\Filament\Exports\ContactFormSubmissionExporter;
use App\Models\ContactFormSubmission;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
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
                TextColumn::make('phone')->label('Phone Number')->searchable()->sortable(),
                TextColumn::make('email')->label('Email')->searchable()->sortable(),
                TextColumn::make('services')->label('Services')->searchable(),

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
                        TextInput::make('phone')->label('Phone Number')->disabled(),
                        TextInput::make('email')->label('Email')->disabled(),
                        TextInput::make('services')->label('Services')->disabled(),
                        Textarea::make('message')->label('Message')->disabled(),

                    ]),

            ])
            ->filters([
                Filter::make('submitted_at_range')
                    ->form([
                        DatePicker::make('submitted_from')->label('Submitted From'),
                        DatePicker::make('submitted_until')->label('Submitted Until'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['submitted_from'], fn($query, $date) => $query->whereDate('created_at', '>=', $date))
                            ->when($data['submitted_until'], fn($query, $date) => $query->whereDate('created_at', '<=', $date));
                    }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(), 
                ExportBulkAction::make()
                ->exporter(ContactFormSubmissionExporter::class)
            ]);
    }
}
