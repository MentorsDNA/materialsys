<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA proveedor_telefonos
     * Aqui se almacena los telefonos de los proveedores
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_telefonos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('proveedor_telefono_id')->unsigned();
            $table->foreign('proveedor_telefono_id')->references('id')->on('proveedores');
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
        Schema::dropIfExists('proveedor_telefonos');
    }
}
