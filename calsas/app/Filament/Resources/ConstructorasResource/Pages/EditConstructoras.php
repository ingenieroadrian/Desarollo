<?php

namespace App\Filament\Resources\ConstructorasResource\Pages;

use App\Filament\Resources\ConstructorasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConstructoras extends EditRecord
{
    protected static string $resource = ConstructorasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('eliminar'),
            Actions\EditAction::make()->label('editar'),

        ];
    }
}
