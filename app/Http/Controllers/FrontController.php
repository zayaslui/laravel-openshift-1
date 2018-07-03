<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return "hola obras";
      // return View('obras');
    }
    
    public function plans(){
      return View('plans');
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

}
