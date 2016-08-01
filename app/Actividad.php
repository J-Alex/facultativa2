<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['nombre', 'idfinca'];
    protected $table="actividades";
    
    public function quincenales() {
        return $this->belongsTo('App\Quincenal');
    }
    public function fincas() {
        return $this->hasMany('App\Finca');
    }
}
