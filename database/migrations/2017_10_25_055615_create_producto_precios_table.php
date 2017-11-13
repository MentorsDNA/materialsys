<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoPreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_precios', function (Blueprint $table) {

            $table->increments('id');
            $table->string('producto_precio_codigo')->index();
            $table->string('producto_codigo');
            $table->integer('empresa_precio_id')->unsigned();
            $table->foreign('empresa_precio_id')->references('id')->on('empresas');
            $table->decimal('precio_compra_unidad', 6, 2)->nullable();
            $table->decimal('precio_compra_docena', 8, 2);
            $table->decimal('precio_venta_unidad', 6, 2)->nullable();
            $table->decimal('precio_venta_docena', 8, 2)->nullable();
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
        Schema::dropIfExists('producto_precios');
    }
}
