<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCensosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('nrodefamilia');
            $table->string('parroquia');
            $table->integer('eje');
            $table->string('tipolap');
            $table->string('comunidad');
            $table->string('grupofamiliar');
            $table->string('nombreyapellido');
            $table->bigInteger('cedula');
            $table->string('fechanac');
            $table->bigInteger('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('serialcarnet');
            $table->string('codigocarnet');
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
        Schema::dropIfExists('censos');
    }
}
