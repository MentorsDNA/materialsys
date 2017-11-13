<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_detalle_productos', function (Blueprint $table) {
          
            $table->increments('id');
            $table->integer('info_envio_id')->unsigned();
            $table->foreign('info_envio_id')->references('id')->on('registro_informacion_envios');
            $table->integer('producto_tipo_unidad');
            $table->integer('producto_cantidad');
            $table->integer('compra_producto_id')->unsigned();
            $table->foreign('compra_producto_id')->references('id')->on('producto_precios');
            $table->decimal('compra_producto_precio', 10 ,2);
            $table->decimal('compra_producto_precio_total', 10 ,2);
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
        Schema::dropIfExists('compra_detalle_productos');
    }
}
