<?php

namespace App\Filament\Resources\GanisResource\Pages;

use App\Filament\Resources\GanisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditGanis extends EditRecord
{
    protected static string $resource = GanisResource::class;
    protected static ?string $title = 'Ubah Tenaga Teknis';

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->mutateFormDataUsing(
                function (array $data): array {
                    $data['created_by'] = Auth::user()->id;
                    return $data;
                }
            ),
        ];
    }
}
