<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ClienteController;

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

Route::get('/cadastroCliente', function () {
    return view('formulario');
});

Route::post('/salvarCadastro', [ClienteController::class,'salvarCliente']);
Route::get('/', [ClienteController::class,'relatorio']);
Route::get('/editarFormulario/{id}', [ClienteController::class,'editarCliente']);
Route::put('/editarFormulario/{id}', [ClienteController::class,'atualizarCliente']);