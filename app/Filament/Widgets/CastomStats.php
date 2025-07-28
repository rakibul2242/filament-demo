<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Castom;
use Carbon\Carbon;

class CastomStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Castoms', Castom::count())
                ->description('All records')
                ->descriptionIcon('heroicon-o-user-group')
                ->chart([25, 11, 35, 15, 85, 39, 25])
                ->color('primary'),

            Card::make('Active Castoms', $active = Castom::where('status', 1)->count())
                ->description('Active Records')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->chart([21, 24, 38, 14, 25, 64, 27])
                ->color('success'),

            Card::make('Inactive Castoms', Castom::where('status', 0)->count())
                ->description('Inactive Records')
                ->descriptionIcon('heroicon-o-x-circle')
                ->chart([10, 2, 9, 6, 1, 3, 7])
                ->color('danger'),
        ];
    }
}
