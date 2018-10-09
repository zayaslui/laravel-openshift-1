<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Obras;
use App\Obras_det;
use App\Prensa;
use App\Layerslider;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ServicesController;


class FrontController extends Controller
{

    protected $services;
    
    public function __construct(){
        $this->services = new ServicesController();
    }

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

   public function obras_det(Request $request,$id){
      // return view('obras_det');
      $detalles = Obras::find($id);
      return response()->view('obras_det');
  }

    public function listar(Request $request) {

        if($request->ajax()){
            // $dato = Obras::All();
            /*custom*/
            $dato = DB::table('obras') 
            -> join('obras_det','obras.id','=','obras_det.obras_id')
            ->select('obras.*','obras_det.id as detalle')
            ->get();
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
    //singleObras
    public function detalle_obra(Request $request){

        if($request->ajax()){
          /*info para obras_det*/
          $obras_det = Obras_det::findOrFail($request->id);
          /*info para layersliders asociado a obras_det*/

          $obras_det = DB::table('obras_det') 
          -> join('obras','obras.id','=','obras_det.obras_id')
          ->select('obras_det.id as id',
                          'obras_det.obras_id as obras_id',
                          'obras_det.contenido_obra as contenido_obra',
                          'obras_det.imagen as imagen',
                          'obras_det.layerslider_id as layerslider_id',
                          'obras.titulo_obra as titulo_obra')
          ->where('obras_det.id', '=', $request->id)
          ->get();

          // $response = $obras_det[0]->layerslider_id;

          // return json_encode(compact('response'));
          
          // return json_encode(compact('response'));
          //usar el servicio de laytersliders
          $layerslider =   $this->services->create_layerslider($obras_det[0]->layerslider_id);
          $response  = ["obras_det"=>$obras_det,"layerslider"=>$layerslider];
          return json_encode(compact('response'));
        }
      
    }

    public function prueba(){
      return view("prueba");
    }

    public function emprende_con_nosotros(){
      return view("emprende_con_nosotros");
    }

    public function create_layerslider_demo(){
        return $this->services->create_layerslider(3); 
    }

}