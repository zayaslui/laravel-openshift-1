<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras_det extends Model
{
    protected $table='obras_det';

    protected $fillable = [
        //'obras_id',
        'titulo_obra',
       	'contenido_obra',
       	'imagen',
       	'layerslider_id'
    ];

    public function obras(){
    	return $this->belongsTo('App\Obras');
    }
}
