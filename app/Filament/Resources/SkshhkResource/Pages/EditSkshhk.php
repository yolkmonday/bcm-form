<?php

namespace App\Filament\Resources\SkshhkResource\Pages;

use App\Filament\Resources\SkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditSkshhk extends EditRecord
{
    protected static string $resource = SkshhkResource::class;
    protected static ?string $title = 'Ubah Form SKSHHK';

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->mutateFormDataUsing(
                function (array $data): array {
                    $data['created_by'] = Auth::user()->id;
                    return $data;
                }
            )->label("Ubah"),
        ];
    }
}
