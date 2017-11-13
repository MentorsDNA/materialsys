<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroInformacionEnviosTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA registro_informacion_envios
     * Aqui se almacena la informacion de los envios
     * Fechas de salida y llegada
     * Empresa que envia Y cual recibe
     * Registro de guia de remision y de factura
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_informacion_envios', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('razon_social_id')->unsigned();
            $table->foreign('razon_social_id')->references('id')->on('razon_socials');
            $table->integer('grupo_empresa_id')->unsigned();
            $table->foreign('grupo_empresa_id')->references('id')->on('grupo_empresas');
            $table->date('fecha_envio');
            $table->date('fecha_llegada');
            $table->string('numero_guia_remision');
            $table->string('numero_factura')->nullable();
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
        Schema::dropIfExists('registro_informacion_envios');
    }
}

