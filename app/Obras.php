<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    protected $table='obras';

    protected $fillable = [
        'descripcion','titulo_obra','contenido_obra','introduccion','layerslider_id'
    ];

    public function layerslider(){
      return $this->belongsTo('App\Layerslider','layerslider_id');
     }     

    /*por cada campo que contenga texto agregar aca, */
     public function titulo_multilenguajes(){
        return $this->hasMany('App\Traducciones','traduccion','titulo_multilenguaje');
        // return $this->belongsTo('App\Traducciones','titulo_multilenguaje');
    }

    public function contenido_obra_2s(){
        return $this->hasMany('App\Traducciones','traduccion','contenido_obra_2');
    }

    public function introduccion_2s(){
        return $this->hasMany('App\Traducciones','traduccion','introduccion_2');
    }

    
}

