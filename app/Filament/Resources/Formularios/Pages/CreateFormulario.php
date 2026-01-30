<?php

namespace App\Filament\Resources\Formularios\Pages;

use App\Filament\Resources\Formularios\FormularioResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFormulario extends CreateRecord
{
    protected static string $resource = FormularioResource::class;

    // Esta función define a dónde ir después de guardar
    protected function getRedirectUrl(): string
    {
        // $this->record es el formulario que se acaba de crear
        return route('formulario.pdf', ['formulario' => $this->record]);
    }

}
