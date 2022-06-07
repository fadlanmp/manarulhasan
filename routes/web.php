<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUstadController;
use App\Http\Controllers\RegisterSantriController;

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
    return view('landingpage',[
        "title" => ""
    ]);
});
Route::get('/login', [LoginController::class, 'index']);

Route::get('/registerSantri', [RegisterSantriController::class, 'index']);

Route::get('/registerUstad', [RegisterUstadController::class, 'index']);
Route::post('/registerUstad', [RegisterUstadController::class, 'store']);

Route::get('/coba', function(){
    return view('kitab', [
        "title" => "|| Daftar Kitab"
    ]);
});