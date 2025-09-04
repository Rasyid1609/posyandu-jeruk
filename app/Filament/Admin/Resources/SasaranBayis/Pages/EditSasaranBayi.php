<?php

namespace App\Filament\Admin\Resources\SasaranBayis\Pages;

use App\Filament\Admin\Resources\SasaranBayis\SasaranBayiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSasaranBayi extends EditRecord
{
    protected static string $resource = SasaranBayiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
