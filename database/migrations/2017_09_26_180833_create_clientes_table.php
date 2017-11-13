<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA cliente_informacions
     * Aqui se almacena la informacion del Cliente
     * Nombres Apellidos y demas
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('numero_identificacion')->nullable();
            $table->string('tipo_identificacion')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
