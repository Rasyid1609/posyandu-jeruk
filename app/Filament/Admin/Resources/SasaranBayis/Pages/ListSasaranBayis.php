<?php

namespace App\Filament\Admin\Resources\SasaranBayis\Pages;

use App\Filament\Admin\Resources\SasaranBayis\SasaranBayiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSasaranBayis extends ListRecords
{
    protected static string $resource = SasaranBayiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
