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
        Schema::create('trayectorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fechaI');
            $table->date('fechaF');
            $table->string('foto');
            $table->integer('titulos');
            $table->foreignId('equipo_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('jugador_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trayectorias');
    }
};
