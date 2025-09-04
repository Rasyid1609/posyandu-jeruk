<?php

namespace App\Filament\Admin\Resources\SasaranRemajas\Pages;

use App\Filament\Admin\Resources\SasaranRemajas\SasaranRemajaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSasaranRemajas extends ListRecords
{
    protected static string $resource = SasaranRemajaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
