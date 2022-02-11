<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Friboi',
                'status' => 'S',
                'cnpj' => '00.000.000/000-00',
                'ddd' => '11',
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'Seara',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '43',
                'telefone' => '00000-0000'
            ],
            2 => [
                'nome' => 'Google',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85',
                'telefone' => '00000-0000'
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
