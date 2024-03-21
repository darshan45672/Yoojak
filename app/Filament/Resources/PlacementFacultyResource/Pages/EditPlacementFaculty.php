<?php

namespace App\Filament\Resources\PlacementFacultyResource\Pages;

use App\Filament\Resources\PlacementFacultyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlacementFaculty extends EditRecord
{
    protected static string $resource = PlacementFacultyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
