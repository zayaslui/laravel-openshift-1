<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
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
    public function create($layerslider_id)
    {
        $datos = array (
            'titulo'=>'Crear Slider',
            'subtitulo'=>'Sliders',
            'layerslider_id'=>$layerslider_id,
        );
        $params = ["disabled"=>true];
        return view('sliders.create',compact('datos'),$params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = Slider::create($request->all());
        return redirect('/sliders/'.$slider->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = array (
            'titulo'=>'Show Slider',
            'subtitulo'=>'Sliders',
            'tituloLayer'=>'Listar Layers '
        );
        
        $slider = Slider::find($id);
        return view("sliders.show",compact('slider'),$datos);
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
    public function destroy(Slider $slider)
    {
            foreach ($slider->layers as $layer) {
                 $file_path = public_path().'/images/layers/obras/'.$layer->src;
                   \File::delete($file_path);
                   //borra el layer
                   $layer->delete();
            }
            //eliminar sliders
            $slider->delete();
    }
}
