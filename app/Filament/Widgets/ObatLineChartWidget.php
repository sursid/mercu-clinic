<?php
namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use App\Models\Obat;

class ObatLineChartWidget extends LineChartWidget
{
    protected static ?string $heading = 'Stok Obat';
    protected string | int | array $columnSpan = 'full'; // gunakan property non-static agar tidak error

    protected function getData(): array
    {
        $obats = Obat::select('nama', 'stok')->get();
        return [
            'datasets' => [
                [
                    'label' => 'Stok',
                    'data' => $obats->pluck('stok')->toArray(),
                    'backgroundColor' => '#3b82f6',
                    'borderColor' => '#2563eb',
                ],
            ],
            'labels' => $obats->pluck('nama')->toArray(),
        ];
    }
}
