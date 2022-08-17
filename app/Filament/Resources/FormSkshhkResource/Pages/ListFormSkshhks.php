<?php

namespace App\Filament\Resources\FormSkshhkResource\Pages;

use App\Filament\Resources\FormSkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormSkshhks extends ListRecords
{
    protected static string $resource = FormSkshhkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
