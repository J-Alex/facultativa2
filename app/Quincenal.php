<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quincenal extends Model
{
    protected $fillable = ['fecha_ini','fecha_fin','id_trab','id_finca','id_act','dias_trab','salario_base','feriado','h_ext','tot_h_ext','otros','septimo','aguinaldo','vacaciones','s_dev','inss_lab','ir','prestamo','total_pagar','inss_patronal','subsidio'];
    protected $table = "quincenales";
    public function fincas() {
        return $this->hasMany('App\Finca');
    }
    public function actividades() {
        return $this->hasMany('App\Actividad');
    }
    public function trabajadores() {
        return $this->hasMany('App\Trabajadores');
    }
}
