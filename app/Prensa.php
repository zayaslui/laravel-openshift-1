<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prensa extends Model
{
    protected $table='prensas';

    protected $fillable = [
        'descripcion',
        'imagen',
        'link'
    ];
}
