<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlacementFacultyResource\Pages;
use App\Filament\Resources\PlacementFacultyResource\RelationManagers;
use App\Models\PlacementFaculty;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlacementFacultyResource extends Resource
{
    protected static ?string $model = PlacementFaculty::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Faculty Name')->required(),
                TextInput::make('designation')->label('Faculty Designation')->required(),
                FileUpload::make('image')->label('Faculty Photo')->required(),
                Select::make('role')->label('Role')->options([
                    1 => 'Principle',
                    2 => 'Dean',
                    3 => 'Vice Principle',
                    4 => 'Placement Officer',
                    5 => 'Hod',
                    6 => 'Placement Coordinator'
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('designation'),
                TextColumn::make('role'),
                ImageColumn::make('image')->width(200)->height(100)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlacementFaculties::route('/'),
            'create' => Pages\CreatePlacementFaculty::route('/create'),
            'edit' => Pages\EditPlacementFaculty::route('/{record}/edit'),
        ];
    }
}
