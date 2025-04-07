<?php

namespace App\Filament\Resources\Settings\FeaturesSectionResource\Pages;

use App\Filament\Resources\Settings\FeaturesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturesSection extends EditRecord
{
    protected static string $resource = FeaturesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
