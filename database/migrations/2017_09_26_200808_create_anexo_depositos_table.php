<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexoDepositosTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA anexo_depositos
     * Aqui se almacena la informacion complementaria de los depositos
     * Nro de operacion
     * La ruta de la Imagen del Boucher
     * titular
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexo_depositos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('cuenta_id')->unsigned();
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
            $table->integer('numero_operacion')->unsigned();
            $table->string('imagen_boucher');
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
        Schema::dropIfExists('anexo_depositos');
    }
}
