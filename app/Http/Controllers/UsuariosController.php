<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Controllers\ServicesController;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\StoreUserRequest;

class UsuariosController extends Controller
{
    protected $services;
    
    public function __construct(){
        $this->services = new ServicesController();
    }
    
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
        // $user = new User();
        // $user->name = $request->name;
        // $user->slug = $this->createSlug($request->name);
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
        // $user::create(array_merge($request->all(), ['index' => 'value']));
        //User::create($request->all()+['slug' => $this->createSlug($request->name)]);

        User::create($request->all()+['slug' => $this->services->createSlug($request->name,new User)]);
        return Redirect::to('/usuario');

        // return $request;
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
        // return Redirect::to("/usuario");
        return redirect('usuario/'.$user->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // $usuario = User::destroy($user);
        $user->delete();
        return Redirect::to('/usuario');
    }
}
