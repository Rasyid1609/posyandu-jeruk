<?php

namespace App\Filament\Admin\Resources\SasaranRemajas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;

class SasaranRemajaForm
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

            Section::make('Remaja Usia >= 15 Tahun')
                    ->schema([
                        TextInput::make('lingkar_perut')
                            ->numeric()
                            ->suffix('cm'),
                        TextInput::make('tekanan_darah')
                            ->required()
                            ->numeric()
                            ->suffix('mmHg'),
                        TextInput::make('gula_darah')
                            ->required()
                            ->numeric()
                            ->label('Gula Darah')
                            ->suffix('mg/dL'),
                        TextInput::make('hemogoblin')
                            ->required()
                            ->numeric()
                            ->label('Hemogoblin')
                            ->suffix('g/dL'),
                        TextInput::make('kolesterol')
                            ->required()
                            ->numeric()
                            ->suffix('mg/dL'),
                    ]),
            ]);
    }
}
