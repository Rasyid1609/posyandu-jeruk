<?php

namespace App\Filament\Admin\Resources\SasaranBayis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class SasaranBayiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, $state) {
                        if ($state) {
                            $age = \Carbon\Carbon::parse($state)->age; // ✅ simple & aman
                            $set('umur', $age);
                        } else {
                            $set('umur', null);
                        }
                    }),
                TextInput::make('umur')
                    ->numeric(),
                TextInput::make('tinggi_badan')
                    ->required()
                    ->numeric()
                    ->reactive()
                    ->afterStateUpdated(function ($set, $get) {
                        $umur = $get('umur');
                        $tb = $get('tinggi_badan');
                        $bb = $get('berat_badan');

                        if ($tb && $umur) {
                            $median = 67 + ($umur * 1);
                            $sd = 3;
                            $set('tbu', round(($tb - $median) / $sd, 2));
                        }

                        if ($bb && $tb) {
                            $set('bbtb', round($bb / $tb, 2));
                        }
                    }),
                TextInput::make('berat_badan')
                    ->required()
                    ->numeric()
                    ->reactive()
                    ->afterStateUpdated(function ($set, $get) {
                        $umur = $get('umur');
                        $bb = $get('berat_badan');
                        $tb = $get('tinggi_badan');

                        if ($bb && $umur) {
                            $median = 7 + ($umur * 0.5);
                            $sd = 1.2;
                            $set('bbu', round(($bb - $median) / $sd, 2));
                        }

                        if ($bb && $tb) {
                            $set('bbtb', round($bb / $tb, 2));
                        }
                    }),
                TextInput::make('bbu')
                    ->label('BB/U (Z-score)')
                    ->numeric()
                    ->readOnly(),
                Select::make('status_bbu')
                    ->label('BB/U')
                    ->required()
                    ->options([
                        'N' => 'N',
                        'TN' => 'TN',
                    ]),
                TextInput::make('tbu')
                    ->label('TB/U (Z-score)')
                    ->numeric()
                    ->readOnly(),
                Select::make('status_tbu')
                    ->label('BB/U')
                    ->required()
                    ->options([
                        'N' => 'N',
                        'TN' => 'TN',
                    ]),
                TextInput::make('bbtb')
                    ->label('BB/TB (Z-score)')
                    ->numeric()
                    ->readOnly()
                    ->afterStateUpdated(function ($set, $get) {
                        $bb = $get('berat_badan');
                        $tb = $get('tinggi_badan');
                        if ($bb && $tb) {
                            $ratio = $bb / $tb; // contoh perhitungan sederhana
                            $set('bbtb', round($ratio, 2));
                        }
                    }),
                Select::make('status_bbtb')
                    ->label('BB/U')
                    ->required()
                    ->options([
                        'Baik' => 'Baik',
                        'Kurang' => 'Kurang',
                    ]),
                TextInput::make('lingkar_kepala')
                    ->numeric(),
                TextInput::make('LILA')
                    ->numeric()
                    ->label('Lingkar Lengan Atas (LILA)')
                    ->suffix('cm'),
            ]);
    }
}
