<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // $user = User::find($id);
        $user  = User::where('slug','=',$slug)->firstOrFail();
        return view('usuario.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //$user = User::find($id);
        // return view('usuario.edit',['user'=>$user]);
        // return view('usuario.edit',compact('user'));
        $user  = User::where('slug','=',$slug)->firstOrFail();
        return view('usuario.edit',compact('user',$slug));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug){
        // $user = User::findOrFail($id);
        $user  = User::where('slug','=',$slug)->firstOrFail();
        $user->fill($request->all());
        $user->save();
        return Redirect::to("/usuario");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::destroy($id);
        return $usuario;
        // return Redirect::to('/usuario');
    }
}
