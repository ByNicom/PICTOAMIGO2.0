<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Catpicto;
use Illuminate\Http\Request;

class CatpictoController extends Controller
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
        $catPicto = new Pictograma(); 
        $catPicto->idPicto = $request->idCatPicto;
        $catPicto->nomCat = $request->nomCat;
        $catPicto->descripcion = $request->descripcion;
        $catPicto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catpicto  $catpicto
     * @return \Illuminate\Http\Response
     */
    public function show(Catpicto $catpicto)
    {
        return $catpicto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catpicto  $catpicto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catpicto $catpicto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catpicto  $catpicto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catpicto $catpicto)
    {
        //
    }
}
