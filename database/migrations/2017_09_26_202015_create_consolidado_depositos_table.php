<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsolidadoDepositosTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA consolidado_depositos
     * Aqui se almacena toda la informacion de los depositos
     * Nro de operacion
     * La ruta de la Imagen del Boucher
     * cuentas, titulares, montos
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidado_depositos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('cuenta_id')->unsigned();
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
            $table->integer('consolidado_empresa_id')->unsigned();
            $table->foreign('consolidado_empresa_id')->references('id')->on('empresas');
            $table->decimal('monto', 10, 2)->unsigned();
            $table->integer('numero_operacion')->unsigned();
            $table->string('imagen_boucher');
            $table->date('fecha_deposito');
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
        Schema::dropIfExists('consolidado_depositos');
    }
}
