<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion_preguntas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('jugador_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('pregunta_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solucion_preguntas');
    }
};
