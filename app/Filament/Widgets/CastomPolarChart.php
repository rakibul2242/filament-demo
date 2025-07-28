<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomPolarChart extends ChartWidget
{
    protected static ?string $heading = 'CastomPolarChart';

    protected function getData(): array
    {
        return [
          'labels' => ['Red', 'Blue', 'Yellow'],
            'datasets' => [
                [
                    'label' => 'Votes',
                    'data' => [12, 19, 3],
                    'backgroundColor' => ['#f87171', '#60a5fa', '#fbbf24'],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'polarArea';
    }
}
