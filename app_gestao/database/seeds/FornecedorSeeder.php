<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Google';
        $fornecedor->site = 'google.com';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'suporte@google.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Amazon',
            'site' => 'amazon.com',
            'uf' => 'AM',
            'email' => 'suporte@amazon.com'
        ]);

        //bug do intelephense
        DB::table('fornecedores')->insert([
            'nome' => 'Microsoft',
            'site' => 'microsoft.com',
            'uf' => 'MG',
            'email' => 'suporte@microsoft.com'
        ]);
    }
}
