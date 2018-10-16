<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Obras;
use App\Obras_det;
use Datatables;
use Illuminate\Support\Facades\DB;

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
        return view('obras.create',['subtitulo'=>'Crear Obras','titulo'=>'Obras','disabled'=>false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obras = Obras::create($request->all());
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
        $obras = Obras::findOrFail($id);
        $params = ['subtitulo'=>'Ver Obras','titulo'=>'Obras','disabled'=>true];
        return view('obras.show',compact('obras'),$params);
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


