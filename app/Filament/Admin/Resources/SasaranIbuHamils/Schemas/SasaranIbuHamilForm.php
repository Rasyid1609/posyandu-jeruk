<?php

namespace App\Filament\Admin\Resources\SasaranIbuHamils\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SasaranIbuHamilForm
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
                    ->suffix('cm'),
                TextInput::make('berat_badan')
                    ->required()
                    ->numeric()
                    ->suffix('kg'),
                TextInput::make('lingkar_lengan_atas')
                    ->numeric()
                    ->suffix('cm'),
                TextInput::make('tekanan_darah')
                    ->required()
                    ->label('Tekanan Darah (Sistole/Diastole)')
                    ->suffix('mmHg'),
            ]);
    }
}
