<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    protected $table='idiomas';

     protected $fillable = [
        'descripcion'
    ];

        public function idioma(){
        return $this->hasMany('App\Traducciones');
    }

}
