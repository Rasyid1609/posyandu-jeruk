<?php

namespace App\Filament\Admin\Resources\SasaranRemajas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SasaranRemajasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('umur')
                    ->label('Umur')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tinggi_badan')
                    ->label('Tinggi Badan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('berat_badan')
                    ->label('Berat Badan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('imt')
                    ->label('IMT')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('lingkar_perut')
                    ->label('Lingkar Perut')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tekanan_darah')
                    ->label('Tekanan Darah')
                    ->searchable(),
                TextColumn::make('gula_darah')
                    ->label('Gula Darah')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('hemogoblin')
                    ->label('Hemogoblin')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
