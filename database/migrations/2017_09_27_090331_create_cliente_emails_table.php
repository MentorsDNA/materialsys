<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteEmailsTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la TABLA cliente_emails
     * Aqui se almacena el Email de los clientes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_emails', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('cliente_email_id')->unsigned();
            $table->foreign('cliente_email_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('cliente_emails');
    }
}
