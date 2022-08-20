<?php

namespace App\Filament\Resources\SkshhkResource\Pages;

use App\Filament\Resources\SkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSkshhk extends CreateRecord
{
    protected static string $resource = SkshhkResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Berhasil menambahkan data !';
    }
}
