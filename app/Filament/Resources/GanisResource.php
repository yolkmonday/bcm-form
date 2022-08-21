<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GanisResource\Pages;
use App\Filament\Resources\GanisResource\RelationManagers;
use App\Models\Ganis;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GanisResource extends Resource
{
    protected static ?string $model = Ganis::class;
    protected static ?string $navigationLabel = 'Tenaga Teknis';
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                Section::make("Data Diri")->schema([
                    Grid::make(2)->schema([
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\TextInput::make('no_reg')
                            ->required()
                            ->maxLength(500),
                        FileUpload::make('foto')
                            ->image()->directory('foto')
                    ])
                ])
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('id'),
                ImageColumn::make('foto')->rounded(),
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('no_reg')->label('No Reg'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label("edit")->tooltip('Ubah Data Tenaga Teknis'),
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
            'index' => Pages\ListGanis::route('/'),
            'create' => Pages\CreateGanis::route('/create'),
            'edit' => Pages\EditGanis::route('/{record}/edit'),
        ];
    }
}
