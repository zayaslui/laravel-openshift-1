<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Layer;
use App\Slider;
use App\Layerslider;

class LayersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*validar */
        $layer = new Layer();
        $target = Slider::findOrFail($request->slider_id)->layerslider->tabla;

        $path = '/images/layers/'.$target.'/';
        $folder = 'images/layers/'.$target;

        if(!file_exists($folder)){
          mkdir($folder, 0777, true);
        }

        if($request->hasFile('src')){
            $file = $request->file('src');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().$path,$name);
            $layer->src = $name;
        }

        $layer -> slider_id = $request->slider_id;
        $layer -> tipo = $request->tipo;
        $layer -> clase = $request->clase;
        $layer -> data_ls = $request->data_ls;
        $layer -> style = $request->style;
        $layer -> otros = $request->otros;
        $layer -> descripcion = $request->descripcion;
        $layer -> save();

        $response = ["layer"=>$layer,"path"=>$target];

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $layer = Layer::findOrFail($id);
        //$layer->fill($request->except('src'));
        
        //path
        $src_path='/images/layers/'.$layer->slider->layerslider->tabla.'/';
        $target = $layer->slider->layerslider->tabla;
        if($request->hasFile('src')){

            /*borrar la imagen vieja*/
            $path_old_image = public_path().$src_path.$layer->src;
            \File::delete($path_old_image);
                    
            $file = $request->file('src');
            $name = time().$file->getClientOriginalName();
            $layer->src = $name;
            $file->move(public_path().$src_path,$name);

        }

            // $layer->fill($request->all())->save();

            $layer->slider_id=$request->slider_id;
            $layer->tipo=$request->tipo;
            $layer->clase = $request->clase;
            $layer->data_ls=$request->data_ls;
            $layer->style=$request->style;
            $layer->otros=$request->otros;
            $layer->descripcion=$request->descripcion;

            $layer->save();

            $response = ["layer"=>$layer,"path"=>$target];

            return response()->json($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layer = Layer::findOrFail($id);
        $path = '/images/layers/'.$layer->slider->layerslider->tabla.'/';
        /*borrar la imagen*/
       $file_path = public_path().$path.$layer->src;
       \File::delete($file_path);
       //borra el layer
       $layer->delete();

    }
}
