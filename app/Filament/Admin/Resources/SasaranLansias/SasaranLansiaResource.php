<?php

namespace App\Filament\Admin\Resources\SasaranLansias;

use App\Filament\Admin\Resources\SasaranLansias\Pages\CreateSasaranLansia;
use App\Filament\Admin\Resources\SasaranLansias\Pages\EditSasaranLansia;
use App\Filament\Admin\Resources\SasaranLansias\Pages\ListSasaranLansias;
use App\Filament\Admin\Resources\SasaranLansias\Schemas\SasaranLansiaForm;
use App\Filament\Admin\Resources\SasaranLansias\Tables\SasaranLansiasTable;
use App\Models\SasaranLansia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SasaranLansiaResource extends Resource
{
    protected static ?string $model = SasaranLansia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Lansia';

    public static function form(Schema $schema): Schema
    {
        return SasaranLansiaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SasaranLansiasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPluralLabel(): string
    {
        return 'Sasaran Lansia';
    }

    public static function getModelLabel(): string
    {
        return 'Sasaran Lansia';
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSasaranLansias::route('/'),
            'create' => CreateSasaranLansia::route('/create'),
            'edit' => EditSasaranLansia::route('/{record}/edit'),
        ];
    }
}
