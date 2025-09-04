<?php

namespace App\Filament\Admin\Resources\SasaranBayis;

use App\Filament\Admin\Resources\SasaranBayis\Pages\CreateSasaranBayi;
use App\Filament\Admin\Resources\SasaranBayis\Pages\EditSasaranBayi;
use App\Filament\Admin\Resources\SasaranBayis\Pages\ListSasaranBayis;
use App\Filament\Admin\Resources\SasaranBayis\Schemas\SasaranBayiForm;
use App\Filament\Admin\Resources\SasaranBayis\Tables\SasaranBayisTable;
use App\Models\SasaranBayi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SasaranBayiResource extends Resource
{
    protected static ?string $model = SasaranBayi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Bayi';

    public static function form(Schema $schema): Schema
    {
        return SasaranBayiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SasaranBayisTable::configure($table);
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
            'index' => ListSasaranBayis::route('/'),
            'create' => CreateSasaranBayi::route('/create'),
            'edit' => EditSasaranBayi::route('/{record}/edit'),
        ];
    }
}
