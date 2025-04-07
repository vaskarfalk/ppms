<?php

namespace App\Filament\Resources\WhatWeDoResource\Pages;

use App\Filament\Resources\WhatWeDoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhatWeDos extends ListRecords
{
    protected static string $resource = WhatWeDoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
