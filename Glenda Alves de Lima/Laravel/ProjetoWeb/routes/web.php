<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware'=>['auth']], function (){
    Route::resource("/trabalhos", \App\Http\Controllers\TrabalhoController::class);
    Route::resource("/pesquisa", \App\Http\Controllers\PesquisaController::class);
});

Route::get("/download/{file}", function ($file="") {
    return response()->download(storage_path("app/public/".$file));
});













