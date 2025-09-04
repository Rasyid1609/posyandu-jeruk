<?php

namespace App\Filament\Admin\Resources\SasaranIbuHamils;

use App\Filament\Admin\Resources\SasaranIbuHamils\Pages\CreateSasaranIbuHamil;
use App\Filament\Admin\Resources\SasaranIbuHamils\Pages\EditSasaranIbuHamil;
use App\Filament\Admin\Resources\SasaranIbuHamils\Pages\ListSasaranIbuHamils;
use App\Filament\Admin\Resources\SasaranIbuHamils\Schemas\SasaranIbuHamilForm;
use App\Filament\Admin\Resources\SasaranIbuHamils\Tables\SasaranIbuHamilsTable;
use App\Models\SasaranIbuHamil;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SasaranIbuHamilResource extends Resource
{
    protected static ?string $model = SasaranIbuHamil::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Ibu Hamil';

    public static function form(Schema $schema): Schema
    {
        return SasaranIbuHamilForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SasaranIbuHamilsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    public static function getPluralLabel(): string
    {
        return 'Sasaran Ibu Hamil';
    }

    public static function getModelLabel(): string
    {
        return 'Sasaran Ibu Hamil';
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSasaranIbuHamils::route('/'),
            'create' => CreateSasaranIbuHamil::route('/create'),
            'edit' => EditSasaranIbuHamil::route('/{record}/edit'),
        ];
    }
}
