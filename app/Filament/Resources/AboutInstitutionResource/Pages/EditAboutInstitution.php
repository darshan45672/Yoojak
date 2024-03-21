<?php

namespace App\Filament\Resources\AboutInstitutionResource\Pages;

use App\Filament\Resources\AboutInstitutionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutInstitution extends EditRecord
{
    protected static string $resource = AboutInstitutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
