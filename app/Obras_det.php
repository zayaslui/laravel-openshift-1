<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras_det extends Model
{
    protected $table='obras_det';

    protected $fillable = [
        'descripcion'
    ];

    public function obras(){
    	return $this->belongsTo('App\Obras');
    }
}
