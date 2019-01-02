<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traducciones extends Model
{
    protected $table='traducciones';

    protected $fillable = [
    	'traduccion',
    	'descripcion',
    ];

    // public function traduccion(){
    //     return $this->belongsTo('App\Obras','titulo_multilenguaje','traduccion');
    // }

    // public function contenido(){
    //     return $this->belongsTo('App\Obras','contenido_obra_2','traduccion');
    // }

    public function idioma(){
        return $this->belongsTo('App\Idiomas');
    }

}
