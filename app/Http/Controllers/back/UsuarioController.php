<?php

namespace  App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\{Auth,Hash};

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    

    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->Email = $request->email;
        $usuario->NomUsuario = $request->nombre;
        $usuario->ApeUsuario = $request->apellido;
        $usuario->password = Hash::make($request->password);
        $usuario->clave = $request->clave;
        $usuario->save();
        return redirect()->route("home.login");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {

        $usuario = $usuario = Usuario::where('Email',Auth::user()->Email)->first();
        $usuario->email = $request->email;
        $usuario->NomUsuario = $request->NomUsuario;
        $usuario->ApeUsuario = $request->ApeUsuario;
        $usuario->password = Hash::make($request->password);
        $usuario->clave = $request->clave;
        $usuario->save();
        return redirect()->route("home.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {      
        $usuario = Usuario::where("Email",Auth::user()->Email)->first();
        $usuario->delete();
        return redirect()->route("home.login");
    }

    public function login(Request $request){
        $credenciales = $request->only("email",'password');
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            //credenciales correctas
            $usuario = Usuario::where('email',$request->email);
            return redirect()->route('home.index');
        }else{
            //credenciales incorrectas
            return back()->withErrors('Cuenta Incorrecta');
            
            
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.login');
    }
}
