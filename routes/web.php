<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PedidosController;

/*                               ROTAS WEB
|--------------------------------------------------------------------------|
|                               TELA INICIAL                               |
|--------------------------------------------------------------------------|
*/
Route::get('/', [ProdutosController::class, 'index']);
Route::get('/', [ProdutosController::class, 'index'])->name('index');
/*
|--------------------------------------------------------------------------|
|                                 PRODUTOS                                 |
|--------------------------------------------------------------------------|
*/
Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrarProduto');
Route::get('/produtos/ver/{produto}', [ProdutosController::class, 'show']);
Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit']);
Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'update'])->name('atualizarProduto');
Route::get('/produtos/drop/{produto}', [ProdutosController::class, 'delete']);
Route::post('/produtos/drop/{produto}', [ProdutosController::class, 'destroy'])->name('deletarProduto');
Route::post('/produtos/search/', [ProdutosController::class, 'search'])->name('pesquisar');
/*
|--------------------------------------------------------------------------|
|                                  PEDIDOS                                 |
|--------------------------------------------------------------------------|
*/
//Route::get('/pedidos/novo/{pedido}', [PedidosController::class, 'create']);
Route::get('/pedidos/novo/{pedido}', function($id){
    return view('pedidos.create', ['id' => $id]);
});
Route::post('/pedidos/novo', [PedidosController::class, 'store'])->name('registrarPedido');
Route::get('/pedidos/ver/{pedido}', [PedidosController::class, 'show']);
Route::get('/pedidos/edit/{pedido}', [PedidosController::class, 'edit']);
Route::post('/pedidos/edit/{pedido}', [PedidosController::class, 'update'])->name('atualizarPedido');
Route::get('/pedidos/drop/{pedido}', [PedidosController::class, 'delete']);
Route::post('/pedidos/drop/{pedido}', [PedidosController::class, 'destroy'])->name('deletarPedido');
Route::get('/pedidos/list', [PedidosController::class, 'list']);



