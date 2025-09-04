<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Admin\Widgets\StatsOverview;

class Dashboard extends BaseDashboard
{

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

    public static function getWidgetsColumns(): array
    {
        return [
            'sm' => 1,
            'md' => 2,
            'lg' => 3,
        ];
    }
}
