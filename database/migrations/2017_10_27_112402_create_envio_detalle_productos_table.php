<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio_detalle_productos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('info_envio_id')->unsigned();
            $table->foreign('info_envio_id')->references('id')->on('registro_informacion_envios');
            $table->float('producto_tipo_unidad' , 2);
            $table->float('producto_cantidad' , 10);
            $table->integer('empresa_producto_id')->unsigned();
            $table->foreign('empresa_producto_id')->references('id')->on('producto_precios');
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
        Schema::dropIfExists('envio_detalle_productos');
    }
}
