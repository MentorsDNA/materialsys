<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositosTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA depositos
     * Aqui se almacena la informacion del deposito
     * cuentas 
     * montos
     * fecha
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('deposito_cuenta_id')->unsigned();
            $table->foreign('deposito_cuenta_id')->references('id')->on('cuentas');
            $table->decimal('monto', 10, 2)->unsigned();
            $table->date('fecha_deposito');
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
        Schema::dropIfExists('depositos');
    }
}
