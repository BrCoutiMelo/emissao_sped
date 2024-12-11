<?php

namespace App\Http\Controllers;

use App\Models\NotaFiscal;
use Illuminate\Http\Request;

class NotaFiscalController extends Controller
{
    public function create(){
        return view('nota-fiscal');
    }
    public function store(Request $request)  {
    //     $validated = $request->validate([
    //         'emitente_nome' => 'required|string',
    //         'emitente_cnpj' => 'required|string',
    //         'destinatario_nome' => 'required|string',
    //         'destinatario_cnpj' => 'required|string',
    //         'produto_codigo.*' => 'required|string',
    //         'produto_descricao.*' => 'required|string',
    //         'produto_quantidade.*' => 'required|integer',
    //         'produto_valor_unitario.*' => 'required|numeric',
    //         'valor_total' => 'required|numeric',
    //     ]);
        $nota = new NotaFiscal;
        $nota->numero_nf = $request->numero_nf;
        $nota->serie = $request->serie;
        $nota->emitente_nome = $request->emitente_nome;
        $nota->emitente_cnpj = $request->emitente_cnpj;
        $nota->emitente_ie = $request->emitente_ie;
        $nota->emitente_endereco = $request->emitente_endereco;
        $nota->destinatario_nome = $request->destinatario_nome;
        $nota->destinatario_cnpj = $request->destinatario_cnpj;
        $nota->destinatario_ie = $request->destinatario_ie;
        $nota->destinatario_endereco = $request->destinatario_endereco;
        $nota->data_emissao = $request->data_emissao;
        $nota->tipo_operacao = $request->tipo_operacao;
        $nota->valor_total = $request->valor_total;
        $nota->valor_frete = $request->valor_frete;
        $nota->valor_seguro = $request->valor_seguro;
        $nota->descontos = $request->descontos;
        $nota->finalidade = $request->finalidade;

        $nota->save();

        return redirect('/');
    }
}
