<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA proveedor_direccions
     * Aqui se almacena la direccion de los proveedores
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_direccions', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('proveedor_direccion_id')->unsigned();
            $table->foreign('proveedor_direccion_id')->references('id')->on('proveedores');
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
        Schema::dropIfExists('proveedor_direccions');
    }
}
