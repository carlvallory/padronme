<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricula');
            $table->integer('ssn');
            $table->string('estado');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('fch_nac');
            $table->string('vote_2018');
            $table->string('departamento');
            $table->string('distrito');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registros');
    }
}
