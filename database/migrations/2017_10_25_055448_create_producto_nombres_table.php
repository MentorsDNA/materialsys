<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoNombresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_nombres', function (Blueprint $table) {

            $table->increments('id');
            $table->string('producto_codigo');
            $table->text('nombre_extendido');
            $table->string('nombre_corto');
            $table->char('numero_piezas', 2);
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
        Schema::dropIfExists('producto_nombres');
    }
}
