<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlacedStudentResource\Pages;
use App\Filament\Resources\PlacedStudentResource\RelationManagers;
use App\Models\PlacedStudent;
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

class PlacedStudentResource extends Resource
{
    protected static ?string $model = PlacedStudent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->required(),
                TextInput::make('branch')->label('Branch')->placeholder('Computer Science and Engineering')->required(),
                TextInput::make('usn')->label('USN')->required(),
                TextInput::make('company')->label('Placed Company')->required(),
                TextInput::make('package')->label('Pakage offered')->required(),
                FileUpload::make('image')->label('Student Image')->required(),
                Select::make('status')->options([
                    1 => 'Active',
                    2 => 'Block'
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->width(100),
                TextColumn::make('name'),
                TextColumn::make('usn'),
                TextColumn::make('branch'),
                TextColumn::make('company'),
                TextColumn::make('package'),
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
            'index' => Pages\ListPlacedStudents::route('/'),
            'create' => Pages\CreatePlacedStudent::route('/create'),
            'edit' => Pages\EditPlacedStudent::route('/{record}/edit'),
        ];
    }
}
