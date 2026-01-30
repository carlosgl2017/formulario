<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Procedimiento extends Model
{
    // Asegúrate de agregar aquí los campos de tu tabla 'procedimientos'
    // para permitir la asignación masiva (mass assignment).
    // Por ejemplo: 'nombre', 'codigo', 'descripcion', etc.
    protected $fillable = [
        'nombre',
        'estado'
    ];

    /**
     * Relación: Un Procedimiento tiene muchos Formularios.
     * Esto te permitirá hacer cosas como: $procedimiento->formularios
     */
    public function formularios(): HasMany
    {
        return $this->hasMany(Formulario::class);
    }
}
