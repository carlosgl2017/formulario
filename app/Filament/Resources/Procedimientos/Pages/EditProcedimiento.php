<?php

namespace App\Filament\Resources\Procedimientos\Pages;

use App\Filament\Resources\Procedimientos\ProcedimientoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProcedimiento extends EditRecord
{
    protected static string $resource = ProcedimientoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
