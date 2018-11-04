<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prensa extends Model
{
    protected $table='prensas';

    protected $fillable = [
        'descripcion',
        'imagen',
        'link',
        'titulo'
    ];

    public function idiomas(){
    	return $this
    					->belongsToMany('App\Idiomas','traducciones','prensa_id','idioma_id')
    					->withTimestamps();
    }
}
