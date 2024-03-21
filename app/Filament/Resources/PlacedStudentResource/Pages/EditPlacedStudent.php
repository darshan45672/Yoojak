<?php

namespace App\Filament\Resources\PlacedStudentResource\Pages;

use App\Filament\Resources\PlacedStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlacedStudent extends EditRecord
{
    protected static string $resource = PlacedStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
