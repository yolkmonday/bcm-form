<?php

namespace App\Filament\Resources\SkshhkResource\Pages;

use App\Filament\Resources\SkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkshhk extends EditRecord
{
    protected static string $resource = SkshhkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
