<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietarioTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietario_telefonos', function (Blueprint $table) {
    
            $table->increments('id');
            $table->integer('propietario_telefono_id')->unsigned();
            $table->foreign('propietario_telefono_id')->references('id')->on('propietarios');
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
        Schema::dropIfExists('propietario_telefonos');
    }
}
