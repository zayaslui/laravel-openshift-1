<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Layerslider;
use App\Slider;
use App\Layer;
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

    /*funciones de datatables*/

    public function listar_layers(Request $request,$id){
        //creador de consulta
        $layers = Layer::query()->where('slider_id', $id);
        return Datatables::of($layers)
                            ->addColumn('path',function($layer){
                                return $layer->slider->layerslider->tabla;
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
        return view('layersliders.create',['subtitulo'=>'Crear LayerSliders','titulo'=>'Layerslider','disabled'=>false]);
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
        return redirect('layersliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Layerslider $layerslider)
    {
        $params = ['subtitulo'=>'Ver LayerSliders','titulo'=>'Layerslider','disabled'=>true];
        return view('layersliders.show',compact('layerslider'),$params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Layerslider $layerslider)
    {
        $params = ['titulo'=>'Editar LayerSlider','disabled'=>false];
        return view('layersliders.edit',compact('layerslider'),$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layerslider $layerslider)
    {
        $layerslider->fill($request->all())->save();
        return view('layersliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LayerSlider $layerslider)
    {
        //eliminar las fotos de layers
        $layerslider->sliders;
        $path = '/images/layers/'.$layerslider->tabla.'/';
        foreach ( $layerslider->sliders as $slider) {
                //borrar fotos primero
                 foreach ($slider->layers as $layer) {
                    //borra la imagen
                    // print_r($layer);
                   $file_path = public_path().$path.$layer->src;
                   \File::delete($file_path);
                   //borra el layer
                   $layer->delete();
                }
                //eliminar sliders
                $slider->delete();
        }
        // $layerslider->sliders()->delete();
        // eliminar layersliders
        $layerslider->delete();
        return view('layersliders.index');
    }

}
