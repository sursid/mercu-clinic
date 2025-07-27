<?php

namespace App\Filament\Resources\PembelianObatResource\Pages;

use App\Filament\Resources\PembelianObatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPembelianObats extends ListRecords
{
    protected static string $resource = PembelianObatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
