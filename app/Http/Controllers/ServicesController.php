<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Obras;
use App\Prensa;
use App\Obras_det;
use Faker\Generator as Faker;

class ServicesController extends Controller
{
	public function saludar(){
		return "hola mundo";
	}
//For Generating Unique Slug Our Custom function
    public function createSlug($title, $class, $id = 0){
            // Normalize the title
            $slug = str_slug($title);
            // Get any that could possibly be related.
            // This cuts the queries down by doing it once.
            $allSlugs = $this->getRelatedSlugs($class,$slug, $id);
            // If we haven't used it before then we are all good.
            if (! $allSlugs->contains('slug', $slug)){
                return $slug;
            }
            // Just append numbers like a savage until we find not used.
            for ($i = 1; $i <= 10; $i++) {
                $newSlug = $slug.'-'.$i;
                if (! $allSlugs->contains('slug', $newSlug)) {
                    return $newSlug;
                }
            }
            throw new Exception('Can not create a unique slug');
        }

        protected function getRelatedSlugs($class,$slug, $id = 0){
            return $class::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
        }    
}
