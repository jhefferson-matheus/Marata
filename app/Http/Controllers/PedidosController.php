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

    public function show(Pedido $pedidos)
    {
        $pedidos = Pedido::find($pedidos->id);
        return view('pedidos.show', compact('pedidos'));
    }

    public function edit(Pedido $pedidos)
    {
        $pedidos = Pedido::find($pedidos->id);
        return view('pedidos.edit', compact('pedidos'));
    }

    public function update(Request $request, Pedido $pedidos)
    {
        $pedidos = Pedido::find($pedidos->id);

        $pedidos->update([
            'id_produto' => $request->id_produto,
            'status' =>  $request->status,            
            'quantidade' => $request->quantidade,
        ]);
        return "Atualizado Com Sucesso!";
    }

    public function delete(Pedido $pedidos)
    {
        $pedidos = Pedido::find($pedidos->id);
        return view('pedidos.drop', compact('pedidos'));
    }

    public function destroy(Pedido $pedidos)
    {
        $pedidos = Pedido::find($pedidos->id);
        $pedidos->delete();

        return "Pedidos Excluido!";
    }
}
