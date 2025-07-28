<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomScatterChart extends ChartWidget
{
    protected static ?string $heading = 'CastomScatterChart';

    protected function getData(): array
    {
        return [
        'datasets' => [
                [
                    'label' => 'Scatter Dataset',
                    'data' => [
                        ['x' => -10, 'y' => 0],
                        ['x' => 0, 'y' => 10],
                        ['x' => 10, 'y' => 5],
                    ],
                    'backgroundColor' => '#34d399',
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'scatter';
    }
}
