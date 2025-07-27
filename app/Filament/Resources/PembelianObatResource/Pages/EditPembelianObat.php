<?php

namespace App\Filament\Resources\PembelianObatResource\Pages;

use App\Filament\Resources\PembelianObatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPembelianObat extends EditRecord
{
    protected static string $resource = PembelianObatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
