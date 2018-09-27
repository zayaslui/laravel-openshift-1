<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('layouts.admin');
    }

    public function mail(){

       $name = 'Krunal';
       Mail::to('f46f6a5a00-cd3dc0@inbox.mailtrap.io')->send(new SendMailable($name));
       
       return 'Email was sent';
    }

}
