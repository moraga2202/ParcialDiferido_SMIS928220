<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//listar libros
Route::get('libro', 'App\Http\Controllers\LibroController@index');


//obtener un registro para libro
Route::get('libro/{id}', 'App\Http\Controllers\LibroController@show');


//nuevo registro para libro
Route::post('libro', 'App\Http\Controllers\LibroController@store');


//editar registro de libro
Route::put('libro', 'App\Http\Controllers\LibroController@store');


//eliminar registro de libro
Route::delete('libro/{id}', 'App\Http\Controllers\LibroController@destroy');
