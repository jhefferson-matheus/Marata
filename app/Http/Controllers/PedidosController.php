<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Produto;

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
        return "<script>javascript:alert('Pedido Realizado Com Sucesso! 😎');
        javascript:window.location='../../';</script>";
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
        return "<script>javascript:alert('Pedido Atualizado Com Sucesso! ✏️');
        javascript:window.location='../list';</script>";
        
    }

    public function delete(Pedido $pedido)
    {
        $pedido = Pedido::find($pedido->id);
        return view('pedidos.drop', compact('pedido'));
    }

    public function destroy(Pedido $pedido)
    {
        $pedido = Pedido::find($pedido->id);
        $pedido->delete();

        return "<script>javascript:alert('Pedido Excluido Com Sucesso! 🗑️');
        javascript:window.location='../list';</script>";
    }

    public function list(Request $request, Pedido $pedido)
    {
        $pedido = Pedido::all();        
        return view('pedidos.list', compact('pedido'));
    }
}
