<?php

namespace App\Filament\Resources\GanisResource\Pages;

use App\Filament\Resources\GanisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListGanis extends ListRecords
{
    protected static string $resource = GanisResource::class;
    protected static ?string $title = 'Tenaga Teknis';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Tenaga Teknis')->mutateFormDataUsing(
                function (array $data): array {
                    $data['created_by'] = Auth::user()->id;
                    return $data;
                }
            ),
        ];
    }

    protected function getTableEmptyStateHeading(): ?string
    {
        return 'Belum ada data';
    }
}
