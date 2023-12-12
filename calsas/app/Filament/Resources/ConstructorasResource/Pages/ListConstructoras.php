<?php

namespace App\Filament\Resources\ConstructorasResource\Pages;
use App\Filament\Resources\ConstructorasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConstructoras extends ListRecords
{
    protected static string $resource = ConstructorasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Crear'),
            Actions\EditAction::make()->label('Editar')
        ];
    }
}
