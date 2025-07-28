<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomDonutChart extends ChartWidget
{
    protected static ?string $heading = 'CastomDonutChart';

    protected function getData(): array
    {
        return [
        'datasets' => [[
                'data' => [30, 50, 20],
                'backgroundColor' => [
                    'rgba(255, 159, 64, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                ],
            ]],
            'labels' => ['Apples', 'Bananas', 'Cherries'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
