<?php

namespace App\Filament\Resources\Procedimientos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProcedimientoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('estado')
                    ->required()
                    ->numeric(),
            ]);
    }
}
