<?php

namespace App\Filament\Admin\Resources\SasaranDewasas\Pages;

use App\Filament\Admin\Resources\SasaranDewasas\SasaranDewasaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSasaranDewasas extends ListRecords
{
    protected static string $resource = SasaranDewasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
