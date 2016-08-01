<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'inss','civil', 'telefono', 'cedula', 'tipo', 'cargo', 'genero', 'foto'
    ];
    
    public function quincenales() {
        return $this->belongsTo('App\Quincenal');
    }
}
