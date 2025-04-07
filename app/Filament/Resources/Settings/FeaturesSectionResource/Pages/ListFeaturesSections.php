<?php

namespace App\Filament\Resources\Settings\FeaturesSectionResource\Pages;

use App\Filament\Resources\Settings\FeaturesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturesSections extends ListRecords
{
    protected static string $resource = FeaturesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
