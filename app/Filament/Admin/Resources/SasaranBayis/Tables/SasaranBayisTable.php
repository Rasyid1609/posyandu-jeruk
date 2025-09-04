<?php

namespace App\Filament\Admin\Resources\SasaranBayis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SasaranBayisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('umur')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tinggi_badan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('berat_badan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bbu')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status_bbu')
                    ->searchable(),
                TextColumn::make('tbu')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status_tbu')
                    ->searchable(),
                TextColumn::make('bbtb')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status_bbtb')
                    ->searchable(),
                TextColumn::make('lingkar_kepala')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('LILA')
                    ->searchable(),
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
