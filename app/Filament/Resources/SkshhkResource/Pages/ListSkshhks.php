<?php

namespace App\Filament\Resources\SkshhkResource\Pages;

use App\Filament\Resources\SkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkshhks extends ListRecords
{
    protected static string $resource = SkshhkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
