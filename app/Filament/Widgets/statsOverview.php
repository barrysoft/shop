<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class statsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $unshippedOrders = Order::where('status', '!=', 'completed')->count();
        $totalSales = Order::where('status', 'completed')->sum('total');
        $totalSalesLast30Days = Order::where('status', 'completed')->where('created_at', '>=', now()->subDays(30))->sum('total');
        return [
            Card::make('Les 30 derniers jours', '$'.$totalSalesLast30Days)
            ->description('Ventes totales des 30 derniers jours')
            ->color('success')
            ->icon('heroicon-o-currency-dollar'),
            Card::make('Ventes totales', $totalSales.' GNF')
            ->description('Revenu total des commandes terminées')
            ->color('success')
            ->icon('heroicon-o-currency-dollar'),
            Card::make('Commandes non expédiées', $unshippedOrders)
              ->description('Commandes qui n\'ont pas encore été expédiées')
              ->color('danger')
              ->icon('heroicon-o-inbox'),
        ];
    }
}
