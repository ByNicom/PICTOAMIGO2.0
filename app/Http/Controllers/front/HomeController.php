<?php

namespace  App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Pictograma;
use App\Models\Catpicto;
use App\Models\Acthorario;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['login']);
    }

    public function index(){
        return view('home.index');
    }

    public function login(){
        return view('home.login');
    }
    public function signin(){
        return view('home.signin');
    }
    public function account(){
        $usuario = Usuario::where('Email',Auth::user()->Email)->first();
        return view('cuenta.index',compact("usuario"));
    }
    public function horario(){
        $usuario = Usuario::where('Email',Auth::user()->Email)->first();
        $pictos=Pictograma::all();
        $horario=Acthorario::all();
        return view('calendario.index',compact("pictos","usuario","horario"));
    }
    public function prueba(){
        $usuario = Usuario::where('Email',Auth::user()->Email)->first();
        $pictos=Pictograma::all();
        return view('calendario.prueba',compact("pictos","usuario"));
    }
    public function edit(int $picto){
        $categorias=Catpicto::all();
        $pictograma=Pictograma::all();
        $picto=$pictograma[$picto-1];
        return view('pictograma.edit',compact('picto',"categorias"));
    }

    public function borrar(int $picto){
        $pictograma=Pictograma::all();
        $picto=$pictograma[$picto-1];
        return view('pictograma.borrar', compact('picto'));
    }

    public function juegos(){
        $categorias=Catpicto::all();
        return view('juego.seleccionar',compact("categorias"));
    }
    public function jugar(int $idCat){;
        $pictos=Pictograma::where("idCatPicto",$idCat)->get();
        return view('juego.jugar',compact("pictos"));
    }
    public function picto(){
        $categorias=Catpicto::all();
        $pictogramas=Pictograma::all();
        return view('pictograma.index',compact("categorias","pictogramas"));
    }
}
