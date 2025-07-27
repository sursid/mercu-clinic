<?php
namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Obat;
use App\Models\Pasien;

class StatistikWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Obat', Obat::count()),
            Stat::make('Total Pasien', Pasien::count()),
        ];
    }
}
