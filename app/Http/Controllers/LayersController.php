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
            $file->move(public_path().'/images/layers',$name);
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

            $layer = Layer::findOrFail($id);

            // $layer->fill($request->all())->save();
            $layer->slider_id=$request->slider_id;
            $layer->tipo=$request->tipo;
            $layer->clase = $request->clase;
            $layer->data_ls=$request->data_ls;
            $layer->style=$request->style;
            $layer->src=$request->src;
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
