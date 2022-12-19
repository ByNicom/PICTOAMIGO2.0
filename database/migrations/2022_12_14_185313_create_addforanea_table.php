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
        Schema::table('respuesta', function (Blueprint $table) {
            $table->foreign('Email')->references('Email')->on('Usuario')->onDelete('restrict')->change();
            $table->foreign('idPregunta')->references('idPregunta')->on('Pregunta')->onDelete('restrict')->change();
        });
        Schema::table('pregunta', function (Blueprint $table) {
            $table->foreign('idPicto')->references('idPicto')->on('Pictograma')->onDelete('restrict')->change();
        });
        Schema::table('juego', function (Blueprint $table) {
            $table->foreign('idCatPicto')->references('idCatPicto')->on('catpicto')->onDelete('restrict')->change();
            $table->foreign('idPregunta')->references('idPregunta')->on('Pregunta')->onDelete('restrict')->change();
        });
        Schema::table('pictograma', function (Blueprint $table) {
            $table->foreign('idCatPicto')->references('idCatPicto')->on('catpicto')->onDelete('restrict')->change();
            $table->foreign('Email')->references('Email')->on('Usuario')->onDelete('restrict')->change();
        });
        Schema::table('act_Horario', function (Blueprint $table) {
            $table->foreign('idPicto')->references('idPicto')->on('Pictograma')->onDelete('restrict')->change();
            $table->foreign('Email')->references('Email')->on('Usuario')->onDelete('restrict')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addforanea');
    }
};
