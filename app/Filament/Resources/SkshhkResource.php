<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkshhkResource\Pages;
use App\Filament\Resources\SkshhkResource\RelationManagers;
use App\Models\Skshhk;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use App\Models\Ganis;
// use Illuminate\Support\Facades\Auth;

class SkshhkResource extends Resource
{
    protected static ?string $model = Skshhk::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Form ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_ganis')
                    ->label('Petugas Teknis')->required()
                    ->options(Ganis::all()->pluck('nama', 'id'))
                    ->searchable(),
                Section::make('Informasi Dokumen')
                    ->schema([
                        Forms\Components\TextInput::make('no_seri')->label("Nomor Seri")
                            ->required()
                            ->maxLength(50),
                        Grid::make(2)->schema([
                            Forms\Components\DatePicker::make('tgl_terbit')->label("Tanggal Terbit")
                                ->required(),
                            Forms\Components\DatePicker::make('tgl_terima')->label("Tanggal Terima")
                                ->required(),

                        ])

                    ]),

                Section::make('Informasi Vendor')
                    ->schema([
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('vendor_nama')
                                ->required()
                                ->maxLength(500)->label('Nama Perusahaan'),
                            Forms\Components\TextInput::make('vendor_alamat')
                                ->required()->label('Alamat ')
                                ->maxLength(500),
                            Forms\Components\TextInput::make('no_plat')
                                ->required()->label("Plat Nomor")
                                ->maxLength(500),
                            Forms\Components\TextInput::make('nama_supir')->label("Nama Supir")
                                ->required()
                                ->maxLength(500),
                            Forms\Components\TextInput::make('jenis_hh')->label("Jenis Hasil Hutan")
                                ->required()
                                ->maxLength(500),
                            Forms\Components\TextInput::make('jumlah_batang')->label("Jumlah Batang")
                                ->required()->numeric(),
                        ])
                    ]),

                Section::make('Ukuran di Dokumen')
                    ->schema([
                        Grid::make(3)->schema([
                            Forms\Components\TextInput::make('dok_panjang')->numeric()
                                ->required()->label('Panjang'),
                            Forms\Components\TextInput::make('dok_lebar')->numeric()
                                ->required()->label('Lebar'),
                            Forms\Components\TextInput::make('dok_tinggi_1')->numeric()
                                ->required()->label('Tinggi 1'),
                            Forms\Components\TextInput::make('dok_tinggi_2')->numeric()
                                ->required()->label('Tinggi 2'),
                            Forms\Components\TextInput::make('dok_tinggi_3')->numeric()->label('Tinggi 3')->required()
                        ])
                    ]),
                Section::make('Ukuran di Lapangan')
                    ->schema([
                        Grid::make(3)->schema([
                            Forms\Components\TextInput::make('lp_panjang')->label('Panjang')->numeric()
                                ->required(),
                            Forms\Components\TextInput::make('lp_lebar')->numeric()->label('Lebar')
                                ->required(),
                            Forms\Components\TextInput::make('lp_tinggi_1')->numeric()->label('Tinggi 1')
                                ->required(),
                            Forms\Components\TextInput::make('lp_tinggi_2')->numeric()->label('Tinggi 2')
                                ->required(),
                            Forms\Components\TextInput::make('lp_tinggi_3')->numeric()->label('Tinggi 3')
                                ->required(),
                        ]),
                        Grid::make(1)->schema([
                            Forms\Components\Radio::make('is_sesuai')
                                ->label('Apakah data di dokumen dan di lapangan sama ?')
                                ->boolean()
                                ->options([
                                    '1' => 'Ya',
                                    '0' => 'Tidak',
                                ])
                                ->inline()->required()

                        ])
                    ]),

                Section::make('Dokumentasi')
                    ->schema([
                        Grid::make(3)->schema(
                            [
                                FileUpload::make('foto_depan_angkutan')
                                    ->image()->directory('form-attachments'),
                                FileUpload::make('foto_belakang_angkutan')
                                    ->image()->directory('form-attachments'),
                                FileUpload::make('foto_tinggi_1')
                                    ->image()->directory('form-attachments'),
                                FileUpload::make('foto_tinggi_2')
                                    ->image()->directory('form-attachments'),
                                FileUpload::make('foto_tinggi_3')
                                    ->image()->directory('form-attachments'),
                            ]
                        )

                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_ganis'),
                Tables\Columns\TextColumn::make('tgl_terbit')
                    ->date(),
                Tables\Columns\TextColumn::make('tgl_terima')
                    ->date(),
                Tables\Columns\TextColumn::make('no_seri'),
                Tables\Columns\TextColumn::make('vendor_nama'),
                Tables\Columns\TextColumn::make('vendor_alamat'),
                Tables\Columns\TextColumn::make('jenis_hh'),
                Tables\Columns\TextColumn::make('jumlah_batang'),
                Tables\Columns\TextColumn::make('is_sesuai'),
                Tables\Columns\TextColumn::make('no_plat'),
                Tables\Columns\TextColumn::make('nama_supir'),
                Tables\Columns\TextColumn::make('dok_panjang'),
                Tables\Columns\TextColumn::make('dok_lebar'),
                Tables\Columns\TextColumn::make('dok_tinggi_1'),
                Tables\Columns\TextColumn::make('dok_tinggi_2'),
                Tables\Columns\TextColumn::make('dok_tinggi_3'),
                Tables\Columns\TextColumn::make('lp_panjang'),
                Tables\Columns\TextColumn::make('lp_lebar'),
                Tables\Columns\TextColumn::make('lp_tinggi_1'),
                Tables\Columns\TextColumn::make('lp_tinggi_2'),
                Tables\Columns\TextColumn::make('lp_tinggi_3'),
                Tables\Columns\TextColumn::make('foto_depan_angkutan'),
                Tables\Columns\TextColumn::make('foto_belakang_angkutan'),
                Tables\Columns\TextColumn::make('foto_tinggi_1'),
                Tables\Columns\TextColumn::make('foto_tinggi_2'),
                Tables\Columns\TextColumn::make('foto_tinggi_3'),
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
            'index' => Pages\ListSkshhks::route('/'),
            'create' => Pages\CreateSkshhk::route('/create'),
            'edit' => Pages\EditSkshhk::route('/{record}/edit'),
        ];
    }
}
