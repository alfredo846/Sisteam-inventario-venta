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

Route::apiResource('/api/marcas', 'MarcaController');
Route::apiResource('/api/categorias', 'CategoriaController');
Route::apiResource('/api/medidas', 'MedidaController');
Route::apiResource('/api/productos', 'ProductoController');

Route::get('/', function () {
    return view('welcome');
});
