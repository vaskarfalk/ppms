<?php

namespace App\Filament\Resources\Settings\TermsAndConditionsResource\Pages;

use App\Filament\Resources\Settings\TermsAndConditionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTermsAndConditions extends ListRecords
{
    protected static string $resource = TermsAndConditionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
