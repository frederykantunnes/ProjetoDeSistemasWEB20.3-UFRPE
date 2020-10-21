<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PollsController;
use App\Http\Controllers\CategoryNamesController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\VotesController;

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

Auth::routes();

Route::group(['middleware'=>['auth']], function (){
    Route::get('/home', [PollsController::class, "pollRedirect"])->name("home");
    Route::get('/', [PollsController::class, "pollRedirect"])->name("home");
    Route::get('polls/new', [PollsController::class, "new"])->name("new");
    Route::get('polls/trending', [PollsController::class, "trending"])->name("trending");
    Route::resource("/polls", PollsController::class);
    Route::resource("/category", CategoryNamesController::class);
    Route::get("/edit_preference", [PreferencesController::class, "edit"])->name("edit_preference");
    Route::post("/edit_preference", [PreferencesController::class, "store"])->name("edit_preference");
    Route::post("/vote", [VotesController::class, "store"])->name("vote");
});