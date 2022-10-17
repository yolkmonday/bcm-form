<?php

namespace App\Filament\Resources\HasilHutanResource\Pages;

use App\Filament\Resources\HasilHutanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHasilHutan extends EditRecord
{
    protected static string $resource = HasilHutanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
