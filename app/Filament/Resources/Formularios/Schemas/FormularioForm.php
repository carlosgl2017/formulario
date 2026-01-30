<?php

namespace App\Filament\Resources\Formularios\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FormularioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DateTimePicker::make('fecha')
                    ->label('Fecha y Hora')
                    ->default(now()) // Llena con fecha y hora actual
                    ->seconds(false) // Opcional: Oculta los segundos si no son necesarios
                    ->native(false)  // Opcional: Usa el widget de Filament en lugar del nativo del navegador
                    ->readOnly()
                    ->required(),
                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                Select::make('responsable_id')
                    ->relationship('responsable', 'name')
                    ->required(),
                Select::make('autorizador_id')
                    ->relationship('autorizador', 'name')
                    ->required(),
                Select::make('procedimiento_id')
                    ->relationship('procedimiento', 'nombre')
                    ->required(),
                Hidden::make('estado')
                    ->default(1),
            ]);
    }
}
