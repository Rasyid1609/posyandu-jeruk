<?php

namespace App\Filament\Admin\Resources\SasaranRemajas;

use App\Filament\Admin\Resources\SasaranRemajas\Pages\CreateSasaranRemaja;
use App\Filament\Admin\Resources\SasaranRemajas\Pages\EditSasaranRemaja;
use App\Filament\Admin\Resources\SasaranRemajas\Pages\ListSasaranRemajas;
use App\Filament\Admin\Resources\SasaranRemajas\Schemas\SasaranRemajaForm;
use App\Filament\Admin\Resources\SasaranRemajas\Tables\SasaranRemajasTable;
use App\Models\SasaranRemaja;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SasaranRemajaResource extends Resource
{
    protected static ?string $model = SasaranRemaja::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Remaja';

    public static function form(Schema $schema): Schema
    {
        return SasaranRemajaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SasaranRemajasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPluralLabel(): string
    {
        return 'Sasaran Remaja';
    }

    public static function getModelLabel(): string
    {
        return 'Sasaran Remaja';
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSasaranRemajas::route('/'),
            'create' => CreateSasaranRemaja::route('/create'),
            'edit' => EditSasaranRemaja::route('/{record}/edit'),
        ];
    }
}
