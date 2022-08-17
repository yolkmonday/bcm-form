<?php

namespace App\Filament\Resources\FormSkshhkResource\Pages;

use App\Filament\Resources\FormSkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormSkshhk extends EditRecord
{
    protected static string $resource = FormSkshhkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
