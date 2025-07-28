<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class CastomDubbleChart extends ChartWidget
{
    protected static ?string $heading = 'CastomDubbleChart';

    protected function getData(): array
    {
        return [
          'labels' => ['Jan', 'Feb', 'Mar'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'data' => [50, 60, 70],
                    'yAxisID' => 'y',
                    'backgroundColor' => '#3b82f6',
                ],
                [
                    'label' => 'Revenue',
                    'data' => [1500, 2000, 2500],
                    'yAxisID' => 'y1',
                    'type' => 'line',
                    'borderColor' => '#f59e0b',
                    'tension' => 0.4,
                    'fill' => false,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bubble';
    }
}
