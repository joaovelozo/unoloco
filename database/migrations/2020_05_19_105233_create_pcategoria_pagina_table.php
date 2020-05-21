<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcategoriaPaginaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcategoria_pagina', function (Blueprint $table) {
            $table->unsignedBigInteger('pagina_id');
            $table->unsignedBigInteger('pcategoria_id');
           
           
            $table->foreign('pagina_id')->references('id')->on('paginas')->onDelete('cascade');
            $table->foreign('pcategoria_id')->references('id')->on('pcategorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcategoria_pagina');
    }
}
