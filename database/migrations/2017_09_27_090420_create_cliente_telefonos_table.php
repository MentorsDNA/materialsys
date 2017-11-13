<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTelefonosTable extends Migration
{
    /**
     * Run the migrations.
    * Crea la TABLA cliente_telefonos
     * Aqui se almacena los telefonos de los clientes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_telefonos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('cliente_telefono_id')->unsigned();
            $table->foreign('cliente_telefono_id')->references('id')->on('clientes');
            $table->string('tipo');
            $table->string('numero');
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
        Schema::dropIfExists('cliente_telefonos');
    }
}
