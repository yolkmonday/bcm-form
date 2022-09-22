<?php

namespace App\Filament\Resources\SkshhkResource\Pages;

use App\Filament\Resources\SkshhkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class PrintSkshhk extends EditRecord
{
    // protected static string $resource = SkshhkResource::class;
    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Berhasil menambahkan data !';
    }
}
