<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\User;
use Datatables;

use App\Http\Controllers\ServicesController;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
    // listar datatables
    public function listar(){
        $usuarios = User::all();
        return view('usuario.listar',compact('usuarios'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        return view('usuario.create',['titulo'=>'Crear Usuario']);
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
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/avatar',$name);
        }

        $user = new User();
        $user -> name = $request->name;
        $user -> slug = $this->services->createSlug($request->name,$user);
        $user -> email = $request->email;
        $user -> password = $request->password;
        $user -> avatar = $name;
        $user -> save();

        // return $request->avatar->getClientOriginalName();
        // $variables = $request->all()+['slug' => $this->services->createSlug($request->name,new User)]+['avatar'=>$request->avatar->getClientOriginalName()];
        // User::create($request->all()+['slug' => $this->services->createSlug($request->name,new User)]+['avatar'=>$request->avatar->getClientOriginalName()]);
        return redirect('usuario')->with('create', 'Profile updated!');
        // return $variables;
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
        return view('usuario.show',compact('user'),['titulo'=>'Ver Usuario']);
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
        return view('usuario.edit',compact('user'),['titulo'=>'Editar Usuario']);
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
        $user->fill($request->except('avatar'));

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $user ->avatar = $name;
            $file->move(public_path().'/images/avatar',$name);
        }        
        $user->save();
        // return Redirect::to("/usuario");
        return redirect('usuario/'.$user->slug)->with('update','Registro actualizado');
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
        $file_path = public_path().'/images/avatar/'.$user->avatar;
        \File::delete($file_path);
        // return $file_path;
        $user->delete();
        // return Redirect::to('/usuario');
        return redirect('usuario/listar')->with('destroy', 'Profile eliminado!');
    }
}
