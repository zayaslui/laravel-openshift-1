<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Layer;

class LayersController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $layer = new Layer();
        $folder='images/layers';

        if(!file_exists($folder)){
          mkdir('images/layers', 0777, true);
        }

        if($request->hasFile('src')){
            $file = $request->file('src');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/layers/obras/',$name);
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

        return response()->json($layer);
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
        return $request;

        $layer = Layer::findOrFail($id);
        // $layer->fill($request->except('src'));
        
        if($request->hasFile('src')){

            /*borrar la imagen vieja*/
            $path_old_image = public_path().'/images/layers/obras/'.$layer->src;
            \File::delete($path_old_image);
                    
            $file = $request->file('src');
            $name = time().$file->getClientOriginalName();
            $layer->src = $name;
            $file->move(public_path().'/images/layers/obras/',$name);
            $layer->src = 'oiko..............';
        }else{
            $layer->src = 'ndoikoi';
        }


            // $layer->fill($request->all())->save();            
            // $layer->slider_id=$request->slider_id_edit;
            // $layer->tipo=$request->tipo_edit;
            // $layer->clase = $request->clase_edit;
            // $layer->data_ls=$request->data_ls_edit;
            // $layer->style=$request->style_edit;
            // $layer->otros=$request->otros_edit;
            // $layer->descripcion=$request->descripcion_edit;

            $layer->slider_id=$request->slider_id;
            $layer->tipo=$request->tipo;
            $layer->clase = $request->clase;
            $layer->data_ls=$request->data_ls;
            $layer->style=$request->style;
            $layer->otros=$request->otros;
            $layer->descripcion=$request->descripcion;

            $layer->save();

            return response()->json($layer);
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
        $layer->delete();
    }
}
