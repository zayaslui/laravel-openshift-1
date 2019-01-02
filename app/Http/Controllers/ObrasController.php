<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Obras;
use App\Obras_det;
use App\Layerslider;
use App\Idiomas;
use Datatables;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ObrasController extends Controller
{
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
        //respuesta del dataTable()
        // $obras = Obras::all();
        return view('obras.index');
    }

    public function listar_obras(){
        $obras = Obras::query();
        return Datatables::of($obras)
        ->addColumn('obras_det_count', function($obras) {
            return $obras->detalles->count();
        })
       ->addColumn('detalles',function($obras){
            return $obras->detalles;
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
        $layersliders = Layerslider::select(DB::raw('concat(id, " - ",descripcion) as descripcion'),'id')->get();
        return view('obras.create',compact('layersliders'),['subtitulo'=>'Crear Obras','titulo'=>'Obras','disabled'=>false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '/images/obras';
        $obras = new Obras();

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = $file->getClientOriginalName();
            $file->move(public_path().$path,$name);
            $obras->imagen = $name;
        }

        // $obras = Obras::create($request->all());
        $obras->titulo_obra = $request->titulo_obra;
        $obras->contenido_obra = $request->contenido_obra;
        $obras->introduccion = $request->introduccion;
        $obras->layerslider_id=$request->layerslider_id;
        $obras->save();

        return redirect('obras_/'.$obras->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // $obras = Obras::findOrFail($id);
         $obras = Obras::with(
            [
                'titulo_multilenguajes' => function($query){
                    $query->with('idioma');
                },
                'contenido_obra_2s'=> function($query){
                    $query->with('idioma');
                },         
            ]
    )->find($id);

        $layersliders = Layerslider::select(DB::raw('concat(id, " - ",descripcion) as descripcion'),'id')->get();
        $params = ['subtitulo'=>'Ver Obras','titulo'=>'Obras','disabled'=>true];
        return view('obras.show',compact('obras')+compact('layersliders'),$params);
    }

    public function mostrar($id){

             $obras= Obras::with([
                'titulo_multilenguajes' => function($query){
                    $query->with('idioma');
                },
                'contenido_obra_2s'=> function($query){
                    $query->with('idioma');
                },
            ]
        )->find($id);

        $layersliders = Layerslider::select(DB::raw('concat(id, " - ",descripcion) as descripcion'),'id')->get();
        $params = ['subtitulo'=>'Ver Obras','titulo'=>'Obras','disabled'=>true];
        return compact('obras')+compact('layersliders');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obras = Obras::findOrFail($id);
        //listar 
        $layersliders = Layerslider::select(DB::raw('concat(id, " - ",descripcion) as descripcion'),'id')->get();

        // return compact('obras')+compact('layersliders');

        $params = ['subtitulo'=>'Editar Obras','titulo'=>'Obras','disabled'=>false];
        return view('obras.edit',compact('obras')+compact('layersliders'),$params);
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
        $path= '/images/obras/';
        $obras = Obras::findOrFail($id);
        $obras->fill($request->except('imagen'));

        if($request->hasFile('imagen')){
            /*borrar la imagen vieja*/
            $path_old_image = public_path().$path.$obras->imagen;
            \File::delete($path_old_image);

            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $obras ->imagen = $name;
            $file->move(public_path().$path,$name);
        }
        $obras->save();
        return redirect('obras_/'.$obras->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = '/images/obras/';
        $obras = Obras::findOrFail($id);
        $file_path = public_path().$path.$obras->imagen;
        \File::delete($file_path);
        $obras->delete();
        return redirect('obras_')->with('destroy', 'Obra eliminada!');
    }

}


