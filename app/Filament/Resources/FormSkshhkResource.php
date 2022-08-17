<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormSkshhkResource\Pages;
use App\Filament\Resources\FormSkshhkResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use App\Models\FormSkshhk;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormSkshhkResource extends Resource
{
    protected static ?string $model = FormSkshhk::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vendor')
                    ->required()
                    ->maxLength(50),

                Forms\Components\TextInput::make('alamat_vendor')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('jenis_hh')
                    ->required()
                    ->maxLength(50),

                Forms\Components\TextInput::make('asal_hh')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('volume_hh')
                    ->required(),
                Forms\Components\TextInput::make('no_seri')
                    ->required()
                    ->maxLength(50),
                Forms\Components\DatePicker::make('tgl_terbit')
                    ->required(),
                Forms\Components\DatePicker::make('tgl_terima')
                    ->required(),
                FileUpload::make('doc_depan')->image()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vendor'),
                Tables\Columns\TextColumn::make('alamat_vendor'),
                Tables\Columns\TextColumn::make('jenis_hh'),
                Tables\Columns\TextColumn::make('asal_hh'),
                Tables\Columns\TextColumn::make('volume_hh'),
                Tables\Columns\TextColumn::make('no_seri'),
                Tables\Columns\TextColumn::make('tgl_terbit')
                    ->date(),
                Tables\Columns\TextColumn::make('tgl_terima')
                    ->date(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFormSkshhks::route('/'),
            'create' => Pages\CreateFormSkshhk::route('/create'),
            'edit' => Pages\EditFormSkshhk::route('/{record}/edit'),
        ];
    }
}
