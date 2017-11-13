<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietarioDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietario_direccions', function (Blueprint $table) {
  
            $table->increments('id');
            $table->integer('propietario_direccion_id')->unsigned();
            $table->foreign('propietario_direccion_id')->references('id')->on('propietarios');
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
        Schema::dropIfExists('propietario_direccions');
    }
}
