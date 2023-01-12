<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\back\{UsuarioController,PictogramaController,ActhorarioController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'login'])->name('home.login');
Route::get('/home',[HomeController::class,'index'])->name('home.index');
Route::get('/signin',[HomeController::class,'signin'])->name('home.signin');
Route::get('/account',[HomeController::class,'account'])->name('cuenta.index');
Route::get('/horario',[HomeController::class,'horario'])->name('calendario.index');
Route::get('/jugar',[HomeController::class,'jugar'])->name('juego.jugar');
Route::get('/juego',[HomeController::class,'juegos'])->name('juego.seleccionar');
Route::get('/picto',[HomeController::class,'picto'])->name('pictograma.index');
Route::get('/picto/{pictograma}/edit',[HomeController::class,'edit'])->name('pictograma.edit');
Route::get('/picto/{pictograma}/borrar',[HomeController::class,'borrar'])->name('pictograma.borrar');

Route::post('/usuario/udpate',[UsuarioController::class,'update'])->name('usuario.update');
Route::post('/usuario/login',[UsuarioController::class,'login'])->name('usuario.login');
Route::get('/usuario/logout',[UsuarioController::class,'logout'])->name('usuario.logout');
Route::get('/usuario/delete',[UsuarioController::class,'destroy'])->name('usuario.delete');

Route::post('/signin',[UsuarioController::class,'store'])->name('usuario.signin');

Route::post('/pictograma',[PictogramaController::class,'store'])->name('pictograma.store');
Route::get('/pictogramas',[PictogramaController::class,'index'])->name('pictograma.all');
Route::post('/pictogramas/udpate',[PictogramaController::class,'update'])->name('pictograma.update');
Route::post('/pictogramas/delete',[PictogramaController::class,'destroy'])->name('pictograma.delete');
Route::post('/pictogramas/buscar', [PictogramaController::class,'buscar'])->name('pictograma.buscar');
Route::get('/pictogramas/limpiar', [PictogramaController::class,'limpiar'])->name('pictograma.limpiar');

Route::post('/Horario',[ActhorarioController::class,'store'])->name('horario.store');
Route::post('/Horario/limpiar',[ActhorarioController::class,'limpiar'])->name('horario.limpiar');


Route::get('/account/{{usuario}}',[UsuarioController::class,'show'])->name('usuario.show');
