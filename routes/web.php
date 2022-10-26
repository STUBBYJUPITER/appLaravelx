<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes


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

//route user show user in controller
Route::get('/users',[UserController::class, 'index']);

//route using create class in controller
Route::get('/users/create',[UserController::class, 'create']);

//route using show class in controller
Route::get('/users/{id}',[UserController::class, 'show']);

//route using store for post in create_user views
Route::post('/users',[UserController::class, 'store']);

















/*primero se define el nombre de la ruta
Route::get('/saludo', function () {
    return "hola";
});

Route::get('/saludo/{name}', function ($name) {
    return "Hola ".$name;
});

Route::get('/suma/{num1}/{num2}', function ($num1,$num2) {
    return $num1 + $num2;
})->where(['num1' ,'[0-9]+'],['num2' ,'[0-9]+']);

//opcionales ?
Route::get('/multi/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3 = 1) {
    return $num1*$num2*$num3;
});
*/
