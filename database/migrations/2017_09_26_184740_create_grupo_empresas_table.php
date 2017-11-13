<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_empresas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('numero_ruc', 12);
            $table->integer('propietario_empresa')->unsigned();
            $table->foreign('propietario_empresa')->references('id')->on('propietarios');
            $table->string('nombre');
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
        Schema::dropIfExists('grupo_empresas');
    }
}
