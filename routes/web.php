<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PedidosController;

/*                               ROTAS WEB
|--------------------------------------------------------------------------|
|                               TELA INICIAL                               |
|--------------------------------------------------------------------------|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');
/*
|--------------------------------------------------------------------------|
|                                 PRODUTOS                                 |
|--------------------------------------------------------------------------|
*/
Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{produto}', [ProdutosController::class, 'show']);
Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit']);
Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'update'])->name('atualizar');
Route::get('/produtos/drop/{produto}', [ProdutosController::class, 'delete']);
Route::post('/produtos/drop/{produto}', [ProdutosController::class, 'destroy'])->name('deletar');
/*
|--------------------------------------------------------------------------|
|                                  PEDIDOS                                 |
|--------------------------------------------------------------------------|
*/
Route::get('/pedidos/novo', [PedidosController::class, 'create']);
Route::post('/pedidos/novo', [PedidosController::class, 'store'])->name('registrar_pedidos');
Route::get('/pedidos/ver/{pedidos}', [PedidosController::class, 'show']);
Route::get('/pedidos/edit/{pedidos}', [PedidosController::class, 'edit']);
Route::post('/pedidos/edit/{pedidos}', [PedidosController::class, 'update'])->name('atualizar');
Route::get('/pedidos/drop/{pedidos}', [PedidosController::class, 'delete']);
Route::post('/pedidos/drop/{pedidos}', [PedidosController::class, 'destroy'])->name('deletar');



