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
Route::group(['prefix'=>'api'],function(){
    Route::apiResource('/marcas', 'MarcaController');
    Route::apiResource('/categorias', 'CategoriaController');
    Route::apiResource('/medidas', 'MedidaController');
    Route::apiResource('/productos', 'ProductoController');
});

Route::get('/', function () {
    return view('welcome');
});
