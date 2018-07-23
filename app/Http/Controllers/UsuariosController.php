<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Middleware\SubstituteBindings;

use App\Http\Requests\StoreUserRequest;

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

    public function create(){
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request){

        /*agregar el slug*/
        $user = new User();
        $user::create($request->all());
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user){
        // $user = User::find($id);
        // $user  = User::where('slug','=',$slug)->firstOrFail();
        return view('usuario.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user){

        //$user = User::find($id);
        // return view('usuario.edit',['user'=>$user]);
        // return view('usuario.edit',compact('user'));
        // $user  = User::where('slug','=',$slug)->firstOrFail();
        return view('usuario.edit',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        // $user = User::findOrFail($id);
        // $user  = User::where('slug','=',$slug)->firstOrFail();
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
