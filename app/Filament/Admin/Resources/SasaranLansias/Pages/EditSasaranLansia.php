<?php

namespace App\Filament\Admin\Resources\SasaranLansias\Pages;

use App\Filament\Admin\Resources\SasaranLansias\SasaranLansiaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSasaranLansia extends EditRecord
{
    protected static string $resource = SasaranLansiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
