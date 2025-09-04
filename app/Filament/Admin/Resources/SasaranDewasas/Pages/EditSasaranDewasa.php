<?php

namespace App\Filament\Admin\Resources\SasaranDewasas\Pages;

use App\Filament\Admin\Resources\SasaranDewasas\SasaranDewasaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSasaranDewasa extends EditRecord
{
    protected static string $resource = SasaranDewasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
