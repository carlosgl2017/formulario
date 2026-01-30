<?php

namespace App\Filament\Resources\Procedimientos\Pages;

use App\Filament\Resources\Procedimientos\ProcedimientoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProcedimientos extends ListRecords
{
    protected static string $resource = ProcedimientoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
