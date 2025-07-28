<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomBarChart extends ChartWidget
{
    protected static ?string $heading = 'CastomBarChart';

    protected function getData(): array
    {
        return [
      'datasets' => [[
                'label' => 'Castoms Sold',
                'data' => [12, 19, 3, 5, 2, 3],
                'backgroundColor' => 'rgba(255, 99, 132, 0.5)',
                'borderColor' => 'rgba(255, 99, 132, 1)',
            ]],
            'labels' => ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
