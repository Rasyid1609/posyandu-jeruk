<?php

namespace App\Filament\Admin\Resources\SasaranDewasas;

use App\Filament\Admin\Resources\SasaranDewasas\Pages\CreateSasaranDewasa;
use App\Filament\Admin\Resources\SasaranDewasas\Pages\EditSasaranDewasa;
use App\Filament\Admin\Resources\SasaranDewasas\Pages\ListSasaranDewasas;
use App\Filament\Admin\Resources\SasaranDewasas\Schemas\SasaranDewasaForm;
use App\Filament\Admin\Resources\SasaranDewasas\Tables\SasaranDewasasTable;
use App\Models\SasaranDewasa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SasaranDewasaResource extends Resource
{
    protected static ?string $model = SasaranDewasa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Dewasa';

    public static function form(Schema $schema): Schema
    {
        return SasaranDewasaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SasaranDewasasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSasaranDewasas::route('/'),
            'create' => CreateSasaranDewasa::route('/create'),
            'edit' => EditSasaranDewasa::route('/{record}/edit'),
        ];
    }
}
