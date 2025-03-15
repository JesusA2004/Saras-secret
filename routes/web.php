<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');

Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

Route::resource('carritos', App\Http\Controllers\CarritoController::class)->middleware('auth');

Route::resource('envios', App\Http\Controllers\EnvioController::class)->middleware('auth');

Route::resource('pagos', App\Http\Controllers\PagoController::class)->middleware('auth');

Route::resource('pedidos', App\Http\Controllers\PedidoController::class)->middleware('auth');
