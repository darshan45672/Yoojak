<?php

namespace App\Filament\Resources\AboutUniversityResource\Pages;

use App\Filament\Resources\AboutUniversityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutUniversities extends ListRecords
{
    protected static string $resource = AboutUniversityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
