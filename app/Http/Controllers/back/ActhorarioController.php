<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Acthorario;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class ActhorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Acthorario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acthorario = new Acthorario(); 
        $acthorario->idPicto = $request->idPicto;
        $acthorario->fecha = $request->fecha;
        $acthorario->diaSem = $request->diaSem;
        $acthorario->email = Auth::user()->Email;
        $acthorario->save();
        return redirect()->route('calendario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acthorario  $acthorario
     * @return \Illuminate\Http\Response
     */
    public function show(Acthorario $acthorario)
    {
        return $acthorario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acthorario  $acthorario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acthorario $acthorario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acthorario  $acthorario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acthorario $acthorario)
    {
        return $acthorario;
        $acthorario->delete();
    }
}
