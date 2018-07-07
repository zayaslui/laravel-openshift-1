<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Obras;
use App\Obras_det;



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

   public function obras_det(Request $request,$id){
      $detalle = Obras::find(1)->detalles;
      return $request->ajax();
      // return view('obras_det',compact('detalle'));
   }




}
