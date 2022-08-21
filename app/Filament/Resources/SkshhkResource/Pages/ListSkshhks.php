<?php

namespace App\Filament\Resources\SkshhkResource\Pages;

use App\Filament\Resources\SkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListSkshhks extends ListRecords
{
    protected static string $resource = SkshhkResource::class;
    protected static ?string $title = 'Form SKSHHK';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Tambah Form")->mutateFormDataUsing(
                function (array $data): array {
                    $data['created_by'] = Auth::user()->id;
                    return $data;
                }
            )
        ];
    }
}
