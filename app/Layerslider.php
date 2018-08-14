<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layerslider extends Model
{
    protected $table='layersliders';

    public function sliders(){
     	return $this->hasMany('App\Slider');
     }
     
}
