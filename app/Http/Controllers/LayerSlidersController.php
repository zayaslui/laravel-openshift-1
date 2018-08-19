<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Layerslider;
use Datatables;

use App\Http\Controllers\ServicesController;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class LayerSlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $services;
    
    public function __construct(){
        $this->services = new ServicesController();
        $this->middleware('auth');
    }

    public function index()
    {
        $layersliders = Layerslider::all();
        return view('layersliders.index',compact('layersliders'));
    }

    public function listar(){
        $layersliders = Layerslider::query();
        return Datatables::of($layersliders)
                    ->addColumn('sliders_count', function($layerslider) {
                        return $layerslider->sliders->count();
                    })
                    ->addColumn('detalles',function($layerslider){
                        return $layerslider->sliders;
                    })
                    ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layersliders.create',['subtitulo'=>'Crear LayerSliders','titulo'=>'Layerslider']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LayerSlider::create($request->all());
        return redirect('layersliders')->with('create','hola');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $layersliders = Layerslider::find($id);
       return view('layersliders.show',compact('layersliders'),['subtitulo'=>'Ver LayerSliders','titulo'=>'Layerslider']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
