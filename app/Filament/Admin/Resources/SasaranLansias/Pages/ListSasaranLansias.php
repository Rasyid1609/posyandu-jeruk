<?php

namespace App\Filament\Admin\Resources\SasaranLansias\Pages;

use App\Filament\Admin\Resources\SasaranLansias\SasaranLansiaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSasaranLansias extends ListRecords
{
    protected static string $resource = SasaranLansiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
