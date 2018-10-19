<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Datatables;
use App\Prensa;

class PrensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prensa.index');
    }

    public function listar_prensa(){
        $prensas = Prensa::query();
        return Datatables::of($prensas)
                ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prensa.create',['subtitulo'=>'Crear Prensa','titulo'=>'Prensa','disabled'=>false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '/images/prensa';
        $prensa = new Obras();

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = $file->getClientOriginalName();
            $file->move(public_path().$path,$name);
            $prensa->imagen = $name;
        }

        $prensa->descripcion = $request->descripcion;
        $prensa->link = $request->link;
        $prensa->save();

        return redirect('prensa_/'.$prensa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prensa = Prensa::findOrFail($id);
        $params = ['subtitulo'=>'Ver Prensa','titulo'=>'Prensa','disabled'=>true];
        return view('prensa.show',compact('prensa'),$params);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prensa = Prensa::findOrFail($id);
        $params = ['subtitulo'=>'Editar Prensa','titulo'=>'Prensa','disabled'=>false];
        return view('prensa.edit',compact('prensa'),$params);
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
        $path= '/images/prensas/';
        $prensa = Prensa::findOrFail($id);
        $prensa->fill($request->except('imagen'));


        if($request->hasFile('imagen')){
            /*borrar la imagen vieja*/
            $path_old_image = public_path().$path.$obras->imagen;
            \File::delete($path_old_image);

            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $prensa ->imagen = $name;
            $file->move(public_path().$path,$name);
        }
        $prensa->save();
        return redirect('prensa_/'.$prensa->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = '/images/prensas/';
        $prensa = Prensas::findOrFail($id);
        $file_path = public_path().$path.$prensa->imagen;
        \File::delete($file_path);
        $prensa->delete();
        return redirect('prensa_')->with('destroy', 'Prensa eliminada!');        
    }
}
