<?php

namespace App\Filament\Resources\AboutInstitutionResource\Pages;

use App\Filament\Resources\AboutInstitutionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutInstitutions extends ListRecords
{
    protected static string $resource = AboutInstitutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
