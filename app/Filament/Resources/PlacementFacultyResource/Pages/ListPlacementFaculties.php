<?php

namespace App\Filament\Resources\PlacementFacultyResource\Pages;

use App\Filament\Resources\PlacementFacultyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlacementFaculties extends ListRecords
{
    protected static string $resource = PlacementFacultyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
