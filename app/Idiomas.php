<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    protected $table='idiomas';

     protected $fillable = [
        'descripcion'
    ];

    public function obras(){
        return $this
            ->belongsToMany('App\Obras','traducciones','idioma_id','obra_id')
            ->withTimestamps();
    }

    public function prensas(){
    	return $this
    				->belongsToMany('App\Prensas','idioma_id','prensa_id')
    				->withTimestamps();
    }
}
