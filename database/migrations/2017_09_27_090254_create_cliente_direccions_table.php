<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA cliente_direccions
     * Aqui se almacena la direccion de los clientes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_direccions', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('cliente_direccion_id')->unsigned();
            $table->foreign('cliente_direccion_id')->references('id')->on('clientes');
            $table->string('pais');
            $table->string('departamento');
            $table->string('direccion');
            $table->string('tipo_uso');
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
        Schema::dropIfExists('cliente_direccions');
    }
}
