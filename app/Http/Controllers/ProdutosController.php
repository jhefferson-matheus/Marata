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
        //dd($request->all());

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
        // return view('produtos.show', ['produto' => $produto]);

        return view('produtos.show', compact('produto'));
    }
}
