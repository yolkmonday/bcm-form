<?php

namespace App\Filament\Resources\GanisResource\Pages;

use App\Filament\Resources\GanisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGanis extends ListRecords
{
    protected static string $resource = GanisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
