<?php

namespace App\Filament\Widgets;

use App\Models\constructoras;
use App\Models\facturas;
use App\Models\Proveedores;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Constructoras', Constructoras::count()) ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
            Stat::make('Proveedores', Proveedores::count()),
            Stat::make('Facturas Hoy', Facturas::whereDate('created_at', today())->count()),
            Stat::make('Average time on page', '3:12')
            ->description('3% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('success'),
        ];
    }
}
