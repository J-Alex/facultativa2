<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuincenalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quincenales', function (Blueprint $table) {
            $table->increments('id');
            
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->integer('id_trab')->unsigned();
            $table->integer('id_finca')->unsigned();
            $table->integer('id_act')->unsigned();
            $table->integer('dias_trab');
            $table->double('salario_base');
            $table->double('feriado');
            $table->double('h_ext');
            $table->double('tot_h_ext');
            $table->double('otros');
            $table->double('septimo');
            $table->double('aguinaldo');
            $table->double('vacaciones');
            $table->double('s_dev');
            $table->double('inss_lab');
            $table->double('ir');
            $table->double('prestamo');
            $table->double('total_pagar');
            $table->double('inss_patronal');
            $table->double('subsidio');
            
            $table->timestamps();
            
            $table->foreign('id_trab')->references('id')->on('trabajadores');
            $table->foreign('id_finca')->references('id')->on('fincas');
            $table->foreign('id_act')->references('id')->on('actividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('quincenales');
    }
}
