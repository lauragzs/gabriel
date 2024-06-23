<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RolController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('welcome');
})->name('prueba');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuario',[UsuarioController::class,'index'])->name('usuario');

Route::delete('/usuario/{id}/',[UsuarioController::class,'destroy'])->name('usuario.destroy');
Route::get('/usuario/{id}/ver', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('/usuario/crear',[UsuarioController::class,'create'])->name('usuario.create');
Route::post('/usuario',[UsuarioController::class,'store'])->name('usuario.store');
Auth::routes();
Route::get('/usuario/{id}/editar',[UsuarioController::class,'edit'])->name('usuario.edit');
Route::put('/usuario/{id}',[UsuarioController::class, 'update'])->name('usuario.update');



Route::get('/producto',[ProductoController::class,'index'])->name('producto');

Route::delete('/producto/{id}/',[ProductoController::class,'destroy'])->name('producto.destroy');
Route::get('/producto/{id}/ver', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/producto/crear',[ProductoController::class,'create'])->name('producto.create');
Route::post('/producto',[ProductoController::class,'store'])->name('producto.store');

Route::get('/categoria',[CategoriaController::class,'index'])->name('categoria');

Route::delete('/categoria/{id}/',[CategoriaController::class,'destroy'])->name('categoria.destroy');
Route::get('/categoria/{id}/ver', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('/categoria/crear',[CategoriaController::class,'create'])->name('categoria.create');
Route::post('/categoria',[CategoriaController::class,'store'])->name('categoria.store');

Auth::routes();
Route::get('/producto/{id}/editar',[ProductoController::class,'edit'])->name('producto.edit');
Route::put('/producto/{id}',[ProductoController::class, 'update'])->name('producto.update');


Route::get('/pedido',[PedidoController::class,'index'])->name('pedido');
Route::get('/pedido/crear',[PedidoController::class,'create'])->name('pedido.create');
Route::post('/pedido',[PedidoController::class,'store'])->name('pedido.store');



Route::get('/rol',[RolController::class,'index'])->name('rol');

Route::delete('/rol/{id}/',[RolController::class,'destroy'])->name('rol.destroy');
Route::get('/rol/{id}/ver', [RolController::class, 'show'])->name('rol.show');
Route::get('/rol/crear',[RolController::class,'create'])->name('rol.create');
Route::post('/rol',[RolController::class,'store'])->name('rol.store');
