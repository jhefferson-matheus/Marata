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
        return "Produto Criado com Sucesso!";
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
        return "Atualizado Com Sucesso!";
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

        return "Produto Excluido!";
    }

    public function list(Request $request, Produto $produto)
    {
        $produto = Produto::all();        
        return view('produtos.list', compact('produto'));
    }
}
