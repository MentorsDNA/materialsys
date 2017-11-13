<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorEmailsTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA proveedor_emails
     * Aqui se almacena el Email de los proveedores
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_emails', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('proveedor_email_id')->unsigned();
            $table->foreign('proveedor_email_id')->references('id')->on('proveedores');
            $table->string('email');
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
        Schema::dropIfExists('proveedor_emails');
    }
}
