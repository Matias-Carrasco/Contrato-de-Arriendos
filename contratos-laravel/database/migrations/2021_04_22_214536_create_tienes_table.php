<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tienes', function (Blueprint $table) {
            $table->integer('ID_anexo')->unsigned();
            $table->foreign('ID_anexo')->references('ID_anexo')->on('anexos');
            $table->integer('ID_clausula')->unsigned();
            $table->foreign('ID_clausula')->references('ID_clausula')->on('clausulas');
            $table->String('Cambios_a_clausula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tienes');
    }
}
