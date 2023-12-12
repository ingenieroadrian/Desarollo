<?php

namespace App\Filament\Resources\ConstructorasResource\Pages;

use App\Filament\Resources\ConstructorasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use PhpParser\Node\Stmt\Label;

class CreateConstructoras extends CreateRecord
{
    protected static string $resource = ConstructorasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()->label('editar')
            
        ];
    }
}
