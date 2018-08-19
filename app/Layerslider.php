<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layerslider extends Model
{
    protected $table='layersliders';

    protected $fillable = [
        'table', 'clase','style'
    ];    
    public function sliders(){
     	return $this->hasMany('App\Slider');
     }
     
}
