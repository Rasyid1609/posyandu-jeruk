<?php

namespace App\Filament\Admin\Resources\SasaranRemajas\Pages;

use App\Filament\Admin\Resources\SasaranRemajas\SasaranRemajaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSasaranRemaja extends EditRecord
{
    protected static string $resource = SasaranRemajaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
