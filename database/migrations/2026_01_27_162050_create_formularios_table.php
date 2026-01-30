<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha');
            $table->text('descripcion');
            // Esto reemplaza tanto el unsignedBigInteger como el foreign->references
            $table->foreignId('responsable_id')->constrained('users');
            $table->foreignId('autorizador_id')->constrained('users');
            $table->foreignId('procedimiento_id')->constrained('procedimientos');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
