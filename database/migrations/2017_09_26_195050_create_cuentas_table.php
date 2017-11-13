<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('banco_id')->unsigned();
            $table->foreign('banco_id')->references('id')->on('bancos');
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->string('numero_cuenta');
            $table->enum('moneda', ['1', '2', '3', '9']);
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
        Schema::dropIfExists('cuentas');
    }
}
