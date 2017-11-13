<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazonSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razon_socials', function (Blueprint $table) {

            $table->increments('id');
            $table->string('numero_ruc', 12);
            $table->integer('razon_empresa_id')->unsigned();
            $table->foreign('razon_empresa_id')->references('id')->on('empresas');
            $table->string('razon_social');
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
        Schema::dropIfExists('razon_socials');
    }
}
