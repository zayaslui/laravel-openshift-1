<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    protected $table='obras';

    protected $fillable = [
        'descripcion'
    ];
        
}
