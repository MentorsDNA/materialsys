<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {


            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->enum('tipo_identificacion', ['0', '1', '2', '3', '4'])->comment('1 DNI, 2 Cedula, 3 C. Extranjeria, 4 Pasaporte, 0 Otro');
            $table->string('numero_identificacion')->nullable();
            $table->integer('proveedor_empresa_id')->unsigned();
            $table->foreign('proveedor_empresa_id')->references('id')->on('empresas');
            $table->string('cargo_parentezco');
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
        Schema::dropIfExists('proveedores');
    }
}
