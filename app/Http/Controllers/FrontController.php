<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Obras;
use App\Obras_det;
use App\Prensa;
use App\Layerslider;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    public function index(){
        return View('index');
    }

    public function contact(){
        return View('contact');
    } 

    public function services(){
        return View('services');
    }
    
    public function obras(){
      return view('obras');
    }

   public function about(){
    return View('about');
   }
   
   public function compromiso(){
    return view('compromiso');
   }
  
  public function prensa(){
    return view('prensa');
   }
   public function servicios_hormigon(){
      return view('services.hormigon');
   }

      public function servicios_prefabricacion(){
      return view('services.prefabricacion');
   }

   public function servicios_concreto(){
      return view('services.concreto');
   }

   public function servicios_mineria(){
      return view('services.mineria');
   }

   public function layer_demo(){
      return view('layerslider');
   }

   public function demo(){
      return view('demo');
   }

   public function obras_det(Request $request){
      // return view('obras_det');
      $detalles = Obras::find(1);
      return response()->view('obras_det');
  }

    public function listar(Request $request) {

        if($request->ajax()){
            $dato = Obras::All();
            return json_encode($dato);
        }

    }

    public function listarPrensa(Request $request){ 
      if($request->ajax()){
        $noticias = Prensa::All();
        return json_encode($noticias);
      }
    }

    public function little_obras(Request $request){
        if($request->ajax()){
            $dato = DB::table('obras')->limit(2)->get();
            return json_encode($dato);
        }
    }

    public function detalle_obra(Request $request){

      if($request->ajax()){
        $dato = Obras::find($request->id)->detalles;
        return json_encode($dato);
      }
      
    }

    public function prueba(){
      return view("prueba");
    }

    public function emprende_con_nosotros(){
      return view("emprende_con_nosotros");
    }
    public function create_layerslider(){
      $layerslider = Layerslider::find(3);
      $src_path = "";
      switch ($layerslider->tabla) {
        case 'obras':
            $src_path = "/images/layers/obras/";
          break;
        case 'principal':
            $src_path = "/images/layers/principal/";
          break;        
      }

      //crear el layerslider
      $html='';
      $html.=
              '
              <!-- apertura layerslider -->
              <div id="layerslider" class="layerslider centrar" style="'.$layerslider->style.'">
              ';
              foreach ($layerslider->sliders as $slider) {
                //recorrer el interior del div slider
                $html.='<div class="'.$slider->clase.'" data-ls="'.$slider->data_ls.'">';
                //recorre layer

                foreach ($slider->layers as $layer) {
                  if($layer->tipo == 'imagen'){
                    $html .= '
                    <img class="'.$layer->clase.'" src="'.$src_path.$layer->src.'">
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
                ';                  
              }
              $html.='
                </div>
                          ';
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
    } 

}
