<?php

namespace App\Filament\Admin\Resources\SasaranDewasas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SasaranDewasaForm
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
                    ->numeric()
                    ->nullable()
                    ->label('Umur Tahun'),
                TextInput::make('tinggi_badan')
                    ->required()
                    ->numeric()
                    ->suffix('cm')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        $bb = $get('berat_badan');
                        if ($state && $bb) {
                            $imt = $bb / pow(($state / 100), 2);
                            $set('imt', round($imt, 2));
                        }
                    }),
                TextInput::make('berat_badan')
                    ->required()
                    ->numeric()
                    ->suffix('kg')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, $get) {
                        $tb = $get('tinggi_badan');
                        if ($state && $tb) {
                            $imt = $state / pow(($tb / 100), 2);
                            $set('imt', round($imt, 2));
                        }
                    }),
                TextInput::make('imt')
                    ->numeric()
                    ->readOnly()
                    ->suffix('kg/m²'),
                TextInput::make('lingkar_perut')
                    ->numeric()
                    ->suffix('cm'),
                TextInput::make('tekanan_darah')
                    ->required()
                    ->label('Tekanan Darah (Sistole/Diastole)')
                    ->suffix('mmHg'),
                TextInput::make('gula_darah')
                    ->required()
                    ->numeric()
                    ->label('Gula Darah')
                    ->suffix('mg/dL'),
                TextInput::make('kolesterol')
                    ->required()
                    ->label('Kolesterol')
                    ->suffix('mg/dL')
                    ->numeric(),
            ]);
    }
}
