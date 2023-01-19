<?php

namespace  App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Pictograma;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Catpicto;

class PictogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pictograma::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pictograma = new Pictograma(); 
        $pictograma->idCatPicto = $request->idCatPicto;
        $pictograma->Email = Auth::user()->Email;
        $pictograma->nomPicto = $request->nomPicto;
        $pictograma->pictograma = $request->pictograma->store('public/pictogramas');
        $pictograma->descPicto = $request->descPicto;
        $pictograma->save();
        return redirect()->route("pictograma.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pictograma  $pictograma
     * @return \Illuminate\Http\Response
     */
    public function show(Pictograma $pictograma)
    {
        return $pictograma;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pictograma  $pictograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pictograma $pictograma)
    {
        $pictograma=Pictograma::find($request->idPicto);

        $pictograma->idPicto = $request->idPicto;
        $pictograma->idCatPicto = $request->idCatPicto;
        $pictograma->Email = Auth::user()->Email;
        $pictograma->nomPicto = $request->nomPicto;
        $pictograma->pictograma =  $request->pictograma;
        $pictograma->descPicto = $request->descPicto;
        $pictograma->save();
        return redirect()->route("pictograma.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pictograma  $pictograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Pictograma $pictograma)
    {
        $pictograma=Pictograma::find($request->idPicto);
        $pictograma->delete();
        return redirect()->route("pictograma.index");
    }

    public function buscar(Request $request){
        $filtrar = 1;
        $idCatPicto = $request->idCatPicto;
        $busqueda = $request->busqueda;


        return redirect()->route('pictograma.index', compact("filtrar", "idCatPicto", "busqueda"));

    }

    public function limpiar(){
        return redirect()->route('pictograma.index');
    }



}
