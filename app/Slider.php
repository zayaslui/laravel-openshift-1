<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $guarded = [];

    public function getRouteKeyName(){
        return 'slider';
    }

    public function layersliders(){
    	return $this->belongsTo('App\LayerSlider');
    }

    public function layers(){
    	return $this->hasMany('App\Layer');
    }
}
