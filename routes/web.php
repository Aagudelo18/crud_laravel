<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\tipo_documentoController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClientesController;

use App\Http\Controllers\LoginController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'], function(){


Route::resource('categorias','App\Http\Controllers\CategoriaController');

Route::resource('productos','App\Http\Controllers\ProductoController');
Route::resource('tipo_documento','App\Http\Controllers\tipo_documentoController');
Route::resource('Empleados','App\Http\Controllers\EmpleadosController');
Route:: resource('pedidos', 'App\Http\Controllers\PedidoController');
Route:: resource('clientes','App\Http\Controllers\ClientesController');

Route::resource('ventas', 'App\Http\Controllers\VentaController');

/*Route::get('/categoria', function (){
    return view('categoria.index');
});*/
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
