<?php

namespace App\Filament\Widgets;

use App\Models\Message;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
            ->description('Number of Users')
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Messages Sent', Message::count())
            ->description('Messages Sent')
            ->color('warning')
            ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
