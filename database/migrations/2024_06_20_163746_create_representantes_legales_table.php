<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesLegalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes_legales', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->nullable();
            $table->unsignedBigInteger('ecsal_id'); // ID de la tabla ecsal
            $table->foreign('ecsal_id')->references('id')->on('ecsal')->onDelete('cascade');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('nombre');
            $table->string('direccion')->nullable();
            $table->string('correo')->nullable();
            $table->string('celular')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representantes_legales');
    }
}
