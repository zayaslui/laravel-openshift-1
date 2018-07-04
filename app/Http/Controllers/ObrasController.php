<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Obras;
use Illuminate\Support\Facades\DB;

class ObrasController extends Controller
{
    
    public function listar(Request $request) {
            return json_encode(Obras::find(1));
        //return   json_encode(Obras::All());
        //var_dump(Obras::All());
        // if($request->ajax()){
        //     $dato = Obras::All();
        //     return json_encode($dato);
        // }

    }

    public function little_obras( Request $request){
        if($request->ajax()){
            $dato = DB::table('obras')->limit(2)->get();
            return json_encode($dato);
        }
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
        //
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
