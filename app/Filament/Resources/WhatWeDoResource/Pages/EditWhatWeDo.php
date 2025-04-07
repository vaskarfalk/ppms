<?php

namespace App\Filament\Resources\WhatWeDoResource\Pages;

use App\Filament\Resources\WhatWeDoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhatWeDo extends EditRecord
{
    protected static string $resource = WhatWeDoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
