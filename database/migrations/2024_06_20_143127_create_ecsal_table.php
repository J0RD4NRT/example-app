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
        Schema::create('ecsal', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion')->nullable();
            $table->string('resolucion_oficial')->nullable();
            $table->string('razon_social');
            $table->string('ruc')->nullable();
            $table->string('direccion')->nullable();
            $table->date('fecha_resolucion')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->date('fecha_baja')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecsal');
    }
};

