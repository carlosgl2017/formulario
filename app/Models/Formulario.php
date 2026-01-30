<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formulario extends Model
{
    // Campos que se pueden asignar masivamente (opcional pero recomendado)
    protected $fillable = [
        'fecha',
        'descripcion',
        'responsable_id',
        'autorizador_id',
        'procedimiento_id',
        'estado'
    ];

    /**
     * Relación: Un formulario pertenece a un Usuario (Responsable).
     * Se especifica 'responsable_id' porque no sigue la convención 'user_id'.
     */
    public function responsable(): BelongsTo
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }

    /**
     * Relación: Un formulario pertenece a un Usuario (Autorizador).
     */
    public function autorizador(): BelongsTo
    {
        return $this->belongsTo(User::class, 'autorizador_id');
    }

    /**
     * Relación: Un formulario pertenece a un Procedimiento.
     * Al llamarse el método 'procedimiento', Laravel buscará automáticamente 'procedimiento_id'.
     */
    public function procedimiento(): BelongsTo
    {
        return $this->belongsTo(Procedimiento::class);
    }
}
