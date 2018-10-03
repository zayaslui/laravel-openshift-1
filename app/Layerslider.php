<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layerslider extends Model
{
    protected $table='layersliders';

    protected $fillable = [
        'tabla', 'clase','style'
    ];    

    public function sliders(){
     	return $this->hasMany('App\Slider');
     }

    public function obras_detalles(){
      return $this->hasMany('App\Obras_det');
    }

}
