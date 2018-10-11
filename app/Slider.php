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

    public function layerslider(){
    	return $this->belongsTo('App\Layerslider','layerslider_id');
    }

    public function layers(){
    	return $this->hasMany('App\Layer');
    }
}
