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


}
