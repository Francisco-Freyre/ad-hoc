<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;

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
    return view('index');
});
Route::get('/lanJuridico', function () {
   return view('juridico.lanJuridico'); 
});

Route::get('/lanSystem', function () {
    return view('sistemas.lanSystem');
});
//Route::post('/contactar', 'MailController@contact')->name('contact');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/home',[PortafolioController::class,'create'])-> name('Portafolio de imagenes');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/portafolio/create',[PortafolioController::class,'create'])-> name('Portafolio de imagenes');
});


Auth::routes(['register' => false ,'reset' => false]);

Route::resource('/portafolio', PortafolioController::class);

