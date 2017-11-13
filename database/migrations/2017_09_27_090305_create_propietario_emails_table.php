<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietarioEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietario_emails', function (Blueprint $table) {
 
            $table->increments('id');
            $table->integer('propietario_email_id')->unsigned();
            $table->foreign('propietario_email_id')->references('id')->on('propietarios');
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
        Schema::dropIfExists('propietario_emails');
    }
}
