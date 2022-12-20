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
        $array_horas = [];
        foreach($horario as $h){
            $array_horas[] = date('H', strtotime($h->fecha));
        }

        return view('calendario.index',compact("pictos","usuario","horario", "array_horas"));
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
    public function jugar(Request $request){
        $idCat = $request->idCat;

        $random = rand(0, 3);

        if($idCat == null){
            return view('home.index');
        }
        $categoria = Catpicto::find($idCat);
        $pictos=Pictograma::where("idCatPicto",$idCat)->get();

        $array_pictos = [];
        $ocupados = [];

        for($i = 0; $i < 4; $i++){
            $numero = rand(0, count($pictos)-1);
            
            if(in_array($numero, $ocupados)){
                $i--;
                continue;
            }else{
                array_push($ocupados, $numero);
                array_push($array_pictos, $pictos[$numero]);
            }
            
        }
        $pictoElegido = $pictos[$random];        

        return view('juego.jugar',compact("pictos", "categoria", "pictoElegido", "array_pictos"));
    }
    public function picto(){
        $categorias=Catpicto::all();
        $pictogramas=Pictograma::all();
        return view('pictograma.index',compact("categorias","pictogramas"));
    }
}
