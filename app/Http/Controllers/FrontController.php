<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Obras;
use App\Obras_det;
use App\Prensa;
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
}
