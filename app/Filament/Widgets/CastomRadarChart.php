<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomRadarChart extends ChartWidget
{
    protected static ?string $heading = 'CastomRadarChart';

    protected function getData(): array
    {
        return [
       'datasets' => [[
                'label' => 'Castom Metrics',
                'data' => [20, 10, 30, 15, 40, 25],
                'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                'borderColor' => 'rgba(255, 99, 132, 1)',
                'pointBackgroundColor' => 'rgba(255, 99, 132, 1)',
            ]],
            'labels' => ['Speed', 'Reliability', 'Comfort', 'Safety', 'Efficiency', 'Durability'],
       
        ];
    }

    protected function getType(): string
    {
        return 'radar';
    }
}
