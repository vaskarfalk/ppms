<?php

namespace App\Filament\Resources\Settings\PageHeadingResource\Pages;

use App\Filament\Resources\Settings\PageHeadingResource;
use App\Models\Settings\PageHeading;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageHeading extends EditRecord
{
    // protected static string $resource = PageHeadingResource::class;
    // protected function getRedirectUrl(): string
    // {
    //     return static::getResource()::getUrl('edit'); 
    // }
    // protected function getHeaderActions(): array
    // {
    //     // Remove unnecessary actions like delete
    //     return [];
    // }
    
    // protected function resolveRecord($key): PageHeading
    
    // {
    //     // Automatically load the singleton record (first or create)
    //     return PageHeading::firstOrCreate(['id' => 1], [
    //         'title' => 'Default Title',
    //         'description' => 'Default description.',
    //     ]);
    // }

    protected static string $resource = PageHeadingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

}
