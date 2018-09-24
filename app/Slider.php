<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $guarded = [];

    protected $fillable = [
        'layerslider_id', 'clase','data_ls'
    ];  

    public function getRouteKeyName(){
        return 'id';
    }

    public function layersliders(){
    	return $this->belongsTo('App\LayerSlider');
    }

    public function layers(){
    	return $this->hasMany('App\Layer');
    }
}
