<?php

namespace App\Filament\Resources\Settings\PageHeadingResource\Pages;

use App\Filament\Resources\Settings\PageHeadingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageHeadings extends ListRecords
{
    protected static string $resource = PageHeadingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
