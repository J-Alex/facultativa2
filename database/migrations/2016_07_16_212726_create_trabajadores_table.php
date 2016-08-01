<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',25);
            $table->string('apellidos',25);
            $table->string('inss',20);
            $table->string('civil',15);
            $table->string('telefono',20);
            $table->string('cedula',20);
            $table->string('tipo',10);
            $table->string('cargo',10);
            $table->string('genero',10);
            $table->string('foto',70);
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
        Schema::drop('trabajadores');
    }
}
