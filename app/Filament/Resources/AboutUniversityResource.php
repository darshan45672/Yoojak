<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUniversityResource\Pages;
use App\Filament\Resources\AboutUniversityResource\RelationManagers;
use App\Models\AboutUniversity;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutUniversityResource extends Resource
{
    protected static ?string $model = AboutUniversity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Title')->required(),
                TextInput::make('link')->label('Link'),
                RichEditor::make('content')->label('Description')->required()->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                // TextColumn::make('content'),
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
            'index' => Pages\ListAboutUniversities::route('/'),
            'create' => Pages\CreateAboutUniversity::route('/create'),
            'edit' => Pages\EditAboutUniversity::route('/{record}/edit'),
        ];
    }
}
