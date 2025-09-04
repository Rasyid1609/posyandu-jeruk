<?php

namespace App\Filament\Admin\Resources\SasaranIbuHamils\Pages;

use App\Filament\Admin\Resources\SasaranIbuHamils\SasaranIbuHamilResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSasaranIbuHamil extends EditRecord
{
    protected static string $resource = SasaranIbuHamilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
