<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Obras;
use App\Prensa;
use App\Obras_det;
use App\Layerslider;
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

public function create_layerslider($id){
    if(!isset($id)) return "layerSlider is Empty";
      $layerslider = Layerslider::findOrFail($id);
      $src_path = "/images/layers/".$layerslider->tabla."/";
      // switch ($layerslider->tabla) {
      //   case 'obras':
      //       $src_path = "/images/layers/obras/";
      //     break;
      //   case 'principal':
      //       $src_path = "/images/layers/principal/";
      //     break;
      // }

      //crear el layerslider
      $html='';
      $html.=
              '
              <!-- apertura layerslider -->

              <div id="layerslider" class="'.$layerslider->clase.'" style="'.$layerslider->style.'">';

      // $html.='

      //         <div id="layerslider" class="layerslider centrar" style="'.$layerslider->style.'">
      //         ';
              foreach ($layerslider->sliders as $slider) {
                //recorrer el interior del div slider}

                $html.='

                <!-- apertura slider -->

                            ';
                $html.='<div class="'.$slider->clase.'" data-ls="'.$slider->data_ls.'">';
                //recorre layer
                foreach ($slider->layers as $layer) {

                  if($layer->tipo == 'img'){
                    $html .= '

                            <img class="'.$layer->clase.'" src="'.$src_path.$layer->src.'" data-ls="'.$layer->data_ls.'">

                    '; 
                  }else{
                    $html.= '

                            <'.$layer->tipo.' class="'.$layer->clase.'" data-ls="'.$layer->data_ls.'" alt="" style="'.$layer->style.'" >'.$layer->descripcion.'</'.$layer->tipo.'>

                          ';                    
                  }
                  if($layer->tipo=='parrafo'){
                    $html.= '

                            <p class="'.$layer->clase.'" data-ls="'.$layer->data_ls.'" alt="" style="'.$layer->style.'" >'.$layer->descripcion.'</p>

                          ';
                  }

                }
                $html.='
                </div>

                 <!-- cierre slider -->

                ';                  
              }
              // $html.='
              //   </div>
              //             ';
      $html .=
              '
              </div>
              <!-- cierre layerslider -->
              ';

      $script=
      '
      <script>
              function start(){
                $("#layerslider").layerSlider({
                          '.$layerslider->script.'
                  });
              }
              start();
      </script>
      ';
      $arr = ['html'=>$html,'script'=>$script];
      return compact('arr');
      // return $html;
    } 
}
