<?php

namespace App\Filament\Admin\Resources\SasaranIbuHamils\Pages;

use App\Filament\Admin\Resources\SasaranIbuHamils\SasaranIbuHamilResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSasaranIbuHamils extends ListRecords
{
    protected static string $resource = SasaranIbuHamilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
