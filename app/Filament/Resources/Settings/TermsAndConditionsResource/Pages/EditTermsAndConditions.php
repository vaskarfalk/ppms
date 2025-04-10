<?php

namespace App\Filament\Resources\Settings\TermsAndConditionsResource\Pages;

use App\Filament\Resources\Settings\TermsAndConditionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTermsAndConditions extends EditRecord
{
    protected static string $resource = TermsAndConditionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
