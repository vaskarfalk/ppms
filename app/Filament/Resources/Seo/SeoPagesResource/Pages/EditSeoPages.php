<?php

namespace App\Filament\Resources\Seo\SeoPagesResource\Pages;

use App\Filament\Resources\Seo\SeoPagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeoPages extends EditRecord
{
    protected static string $resource = SeoPagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
