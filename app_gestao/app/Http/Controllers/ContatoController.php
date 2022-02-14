<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        $motivos_contato = MotivoContato::all();

        return view('site/contato', ['motivos_contato' => $motivos_contato]);
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|min:3|max:100',
            'telefone' => 'required|string|max:20',
            'email' => 'email|unique:site_contatos',
            'motivo_contatos_id' => 'required|integer',
            'mensagem' => 'required|string|max:2000'
        ],
        [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome pode ter no máximo 3 caracteres.',

            'telefone.max' => 'O campo telefone pode ter no máximo 20 caracteres.',

            'email.email' => 'Email inválido.',
            'email.unique' => 'O email informado já está em uso.',

            'motivo_contatos_id.required' => 'O campo motivo deve ser selecionado.',

            'required' => 'O campo :attribute deve ser preenchido'
        ]);

        $contato = new SiteContato();
        $contato->create($request->all());

        return redirect()->route('site.index');
    }
}
