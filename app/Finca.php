<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    protected $fillable = ['nombre']; 
    
    public function quincenales() {
        return $this->belongsTo('App\Quincenal');
    }
    public function Actividades() {
        return $this->belongsTo('App\Actividad');
    }
}
