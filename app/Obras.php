<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    protected $table='obras';

    protected $fillable = [
        'descripcion','titulo_obra','contenido_obra','introduccion','layerslider_id'
    ];
     
     public function detalles(){
     	return $this->hasMany('App\Obras_det');
     }

    public function layerslider(){
      return $this->belongsTo('App\Layerslider','layerslider_id');
     }     

   public function idiomas(){
        return $this
            ->belongsToMany('App\Idiomas','traducciones','obra_id','idioma_id')
            ->withPivot('idioma_id', 'prensa_id')
            ->withTimestamps();
    }
}
