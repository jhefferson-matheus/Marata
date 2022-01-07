<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'custo' =>  $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "<script>javascript:alert('Produto Criado Com Sucesso! 😎');
        javascript:window.location='../../';</script>";
    }

    public function show(Produto $produto)
    {
        $produto = Produto::find($produto->id);
        return view('produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        $produto = Produto::find($produto->id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $produto = Produto::find($produto->id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "<script>javascript:alert('Produto Atualizado Com Sucesso! ✏️');
        javascript:window.location='../../';</script>";
    }

    public function delete(Produto $produto)
    {
        $produto = Produto::find($produto->id);
        return view('produtos.drop', compact('produto'));
    }

    public function destroy(Produto $produto)
    {
        $produto = Produto::find($produto->id);
        $produto->delete();

        return "<script>javascript:alert('Produto Excluido Com Sucesso! 🗑️');
        javascript:window.location='../../';</script>";
    }

    public function index(Request $request, Produto $produto)
    {
        $produto = Produto::all();        
        return view('produtos.index', compact('produto'));
    }
}
