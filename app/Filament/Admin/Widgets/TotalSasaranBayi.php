<?php

namespace App\Filament\Admin\Widgets;

use App\Models\SasaranBayi;
use App\Models\SasaranDewasa;
use App\Models\SasaranLansia;
use App\Models\SasaranRemaja;
use App\Models\SasaranIbuHamil;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalSasaranBayi extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [


            Stat::make('Total Sasaran Ibu Hamil', SasaranIbuHamil::count())
                ->description('Jumlah semua data Ibu Hamil yang sudah terdaftar')
                ->color('success'),
            Stat::make('Total Sasaran Bayi', SasaranBayi::count())
                ->description('Jumlah semua data bayi yang sudah terdaftar')
                ->color('success'),
            Stat::make('Total Sasaran Remaja', SasaranRemaja::count())
                ->description('Jumlah semua data Remaja yang sudah terdaftar')
                ->color('success'),
            Stat::make('Total Sasaran Dewasa', SasaranDewasa::count())
                ->description('Jumlah semua data Dewasa yang sudah terdaftar')
                ->color('success'),
            Stat::make('Total Sasaran Lansia', SasaranLansia::count())
                ->description('Jumlah semua data Lansia yang sudah terdaftar')
                ->color('success'),
        ];
    }
}
