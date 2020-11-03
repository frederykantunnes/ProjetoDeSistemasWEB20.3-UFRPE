<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\controllerCardapio;
use \App\Http\Controllers\controllerUsuario;
use \App\Http\Controllers\controllerPedido;
use \App\Http\Controllers\controllerDashboard;
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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware'=>['auth']], function (){
    Route::resource('/cardapio',controllerCardapio::class);
    Route::resource('/usuario',controllerUsuario::class);
    Route::resource('/pedido',controllerPedido::class);
    Route::get('/buscarcpf',[controllerUsuario::class,'buscarcpf']);
    Route::put('/adicionarpedido',[controllerPedido::class,'adicionarPedido']);
    Route::put('/adicionarpedidoeditar',[controllerPedido::class,'adicionarPedidoEditar']);
    Route::post('/buscarcpfpedido',[controllerPedido::class,'buscarcpf']);
    Route::delete('/excluirItem',[controllerPedido::class,'excluirItem']);
    Route::delete('/excluirItemEditar',[controllerPedido::class,'excluirItemEditar']);
    Route::post('/finalizar',[controllerPedido::class,'finalizar']);
    Route::post('/salvar',[controllerPedido::class,'salvar']);
    Route::post('/entregar',[controllerPedido::class,'entregar']);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [controllerDashboard::class,'index'])->name('dashboard');
