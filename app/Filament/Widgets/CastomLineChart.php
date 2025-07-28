<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomLineChart extends ChartWidget
{
    protected static ?string $heading = 'CastomLineChart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Castoms Created',
                    'data' => [5, 10, 15, 7, 20, 25, 30, 10, 15, 18, 22, 30],
                    'backgroundColor' => 'rgba(59, 130, 246, 0.5)',
                    'borderColor' => 'rgba(59, 130, 246, 1)',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
