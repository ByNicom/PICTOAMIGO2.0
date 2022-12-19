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
        Schema::create('pictograma', function (Blueprint $table) {
            $table->increments('idPicto');
            $table->string('Email',50);
            $table->integer ("idCatPicto")->unsigned();
            $table->string('nomPicto',20);
            $table->string('pictograma',255);
            $table->string('descPicto',30);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictograma');
    }
};
