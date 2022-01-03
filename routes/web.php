<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{produto}', [ProdutosController::class, 'show']);
Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit']);
Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'update'])->name('atualizar');
Route::get('/produtos/drop/{produto}', [ProdutosController::class, 'delete']);
Route::post('/produtos/drop/{produto}', [ProdutosController::class, 'destroy'])->name('deletar');





