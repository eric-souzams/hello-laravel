<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use App\Produto;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::with(['produtoDetalhe', 'fornecedor'])->paginate(10);
        
        return view('app.produtos.index', ['produtos' => $produtos, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();
        $fornecedores = Fornecedor::all();

        return view('app.produtos.create', ['unidades' => $unidades, 'fornecedores' => $fornecedores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|string|min:1|max:100',
            'descricao' => 'required|min:1|max:5000',
            'peso' => 'required|integer',
            'unidade_id' => 'exists:unidades,id',
            'fornecedor_id' => 'exists:fornecedores,id'
        ];

        $feedback = [
            'nome.min' => 'A quantidade de caracteres minima é 1.',
            'nome.max' => 'A quantidade de caracteres maxima é 100.',

            'descricao.min' => 'A quantidade de caracteres minima é 1.',
            'descricao.max' => 'A quantidade de caracteres maxima é 5000.',

            'peso.integer' => 'O campo peso deve ser um número inteiro.',

            'unidade_id.exists' => 'O valor informado no campo unidade não existe em nossos registros.',

            'fornecedor_id.exists' => 'O fornecedor informado no campo fornecedores não existe em nossos registros.',

            'required' => 'O preenchimento do campo :attribute é obrigatório.',
        ];

        $request->validate($regras, $feedback);

        Produto::create($request->all());

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('app.produtos.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $unidades = Unidade::all();
        $fornecedores = Fornecedor::all();

        return view('app.produtos.edit', ['produto' => $produto, 'unidades' => $unidades, 'fornecedores' => $fornecedores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $regras = [
            'nome' => 'required|string|min:1|max:100',
            'descricao' => 'required|min:1|max:5000',
            'peso' => 'required|integer',
            'unidade_id' => 'exists:unidades,id',
            'fornecedor_id' => 'exists:fornecedores,id'
        ];

        $feedback = [
            'nome.min' => 'A quantidade de caracteres minima é 1.',
            'nome.max' => 'A quantidade de caracteres maxima é 100.',

            'descricao.min' => 'A quantidade de caracteres minima é 1.',
            'descricao.max' => 'A quantidade de caracteres maxima é 5000.',

            'peso.integer' => 'O campo peso deve ser um número inteiro.',

            'unidade_id.exists' => 'O valor informado no campo unidade não existe em nossos registros.',

            'fornecedor_id.exists' => 'O fornecedor informado no campo fornecedores não existe em nossos registros.',

            'required' => 'O preenchimento do campo :attribute é obrigatório.',
        ];

        $request->validate($regras, $feedback);

        $produto->update($request->all());

        return redirect()->route('produto.show', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produto.index');
    }
}
