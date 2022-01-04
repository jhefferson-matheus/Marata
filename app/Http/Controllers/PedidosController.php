<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidosController extends Controller
{
    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        Pedido::create([
            'id_produto' => $request->id_produto,
            'status' =>  $request->status,            
            'quantidade' => $request->quantidade,
        ]);
        return "Pedidos Criado com Sucesso!";
    }

    public function show(Pedido $pedido)
    {
        $pedido = Pedido::find($pedido->id);
        return view('pedidos.show', compact('pedido'));
    }

    public function edit(Pedido $pedido)
    {
        $pedido = Pedido::find($pedido->id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $pedido = Pedido::find($pedido->id);

        $pedido->update([
            'id_produto' => $request->id_produto,
            'status' =>  $request->status,            
            'quantidade' => $request->quantidade,
        ]);
        return "Atualizado Com Sucesso!";
    }

    public function delete(Pedido $pedido)
    {
        $pedidos = Pedido::find($pedido->id);
        return view('pedidos.drop', compact('pedido'));
    }

    public function destroy(Pedido $pedido)
    {
        $pedido = Pedido::find($pedido->id);
        $pedido->delete();

        return "Pedidos Excluido!";
    }
}
