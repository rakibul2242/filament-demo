<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomPieChart extends ChartWidget
{
    protected static ?string $heading = 'CastomPieChart';

    protected function getData(): array
    {
        return [
         'datasets' => [[
                'data' => [10, 20, 30],
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                ],
            ]],
            'labels' => ['Red', 'Blue', 'Yellow'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
