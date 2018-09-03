<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layer extends Model
{
    protected $table = 'layers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slider_id',
        'tipo',
        'clase',
        'data_ls',
        'style',
        'src',
        'otros',
        'descripcion',
        
    ];

	public function layers(){
		return $this->belongsTo('App\Slider');
	}
}
