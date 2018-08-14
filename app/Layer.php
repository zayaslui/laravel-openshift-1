<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layer extends Model
{
    protected $table = 'layers';


	public function layers(){
		return $this->belongsTo('App\Slider');
	}
}
