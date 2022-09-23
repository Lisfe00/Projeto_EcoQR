<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;

use Illuminate\Http\Request;

class EcoQRController extends Controller
{

    public function show_cadastro_fornecedor()
    {
        return view('cadastros.cadastro_fornecedor');
    }


    public function cadastro_fornecedor_do(Request $request)
    {
        $fornecedor = new Fornecedor;

        $fornecedor->nome_fornecedor = $request->namef;
        $fornecedor->cpf_cnpj_fornecedor = $request->CPF_CNPJf;
        $fornecedor->fone_fornecedor = $request->fonef;
        $fornecedor->email_fornecedor = $request->emailf;
        $fornecedor->cep_fornecedor = $request->cep;
        $fornecedor->Estado_fornecedor = $request->est == 'Outros' ? $request->outro_estado : $request->est;
        $fornecedor->Cidade_fornecedor = $request->cidade;
        $fornecedor->Bairro_fornecedor = $request->bairro;
        $fornecedor->rua_fornecedor = $request->rua;
        $fornecedor->numero_fornecedor = $request->numero;

        $fornecedor->save();

        return redirect()->route('show.cadastro.fornecedor')->with('msg', 'Fornecedor cadastrado com sucesso!');
    }

    public function show_fornecedors()
    {
        $fornecedors = Fornecedor::all();

        return view('shows.show_fornecedors',['fornecedors' => $fornecedors]);
    }
}
