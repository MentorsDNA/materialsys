<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoCodigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_codigos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('producto_codigo');
            $table->string('tipo_id', 4);
            $table->string('tipo_nombre');
            $table->string('material_id', 4);
            $table->string('material_nombre');
            $table->string('acabado_id', 4);
            $table->string('acabado_nombre');
            $table->string('talla_id', 4);
            $table->string('talla_nombre');
            $table->string('presentacion_id', 4);
            $table->string('presentacion_nombre');
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
        Schema::dropIfExists('producto_codigos');
    }
}
