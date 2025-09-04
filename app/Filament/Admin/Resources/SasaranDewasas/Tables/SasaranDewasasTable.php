<?php

namespace App\Filament\Admin\Resources\SasaranDewasas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SasaranDewasasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('umur')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('tinggi_badan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('berat_badan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('imt')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('lingkar_perut')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tekanan_darah')
                    ->searchable(),
                TextColumn::make('gula_darah')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('kolesterol')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
