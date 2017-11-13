<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA propietario_informacions
     * Aqui se almacena la informacion del Propietario
     * Nombres Apellidos y demas
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('numero_identificacion')->nullable();
            $table->enum('tipo_identificacion', ['0', '1', '2', '3', '4'])->comment('1 DNI, 2 Cedula, 3 C. Extranjeria, 4 Pasaporte, 0 Otro');
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
        Schema::dropIfExists('propietarios');
    }
}
