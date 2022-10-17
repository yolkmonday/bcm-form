<?php

namespace App\Filament\Resources\HasilHutanResource\Pages;

use App\Filament\Resources\HasilHutanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHasilHutans extends ListRecords
{
    protected static string $resource = HasilHutanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
