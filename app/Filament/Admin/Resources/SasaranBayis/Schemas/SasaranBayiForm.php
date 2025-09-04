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
                            $dob = \Carbon\Carbon::parse($state);
                            $now = \Carbon\Carbon::now();
                            $diff = $dob->diff($now);

                            // Format jadi "X tahun Y bulan"
                            $umur = $diff->y . ' tahun ' . $diff->m . ' bulan';

                            $set('umur', $umur);
                        } else {
                            $set('umur', null);
                        }
                    }),
                TextInput::make('umur')
                    ->label('Umur')
                    ->readOnly(),
                TextInput::make('tinggi_badan')
                    ->required()
                    ->numeric()
                    ->suffix('cm'),
                TextInput::make('berat_badan')
                    ->required()
                    ->numeric()
                    ->suffix('kg'),
                Select::make('status_bbu')
                    ->label('BB/U')
                    ->required()
                    ->options([
                        'N' => 'N',
                        'TN' => 'TN',
                    ]),
                Select::make('status_tbu')
                    ->label('BB/U')
                    ->required()
                    ->options([
                        'N' => 'N',
                        'TN' => 'TN',
                    ]),
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
