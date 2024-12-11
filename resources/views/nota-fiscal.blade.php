@extends('layouts.app')

@section('title', 'Emissão de Nota Fiscal')

@section('content')
<div class="container">
    <h1>Emissão de Nota Fiscal</h1>
    <form action="{{ route('nota-fiscal.store') }}" method="POST">
        @csrf

        <!-- Número e Série da Nota Fiscal -->
        <div class="form-group">
            <label for="numero_nf">Número da Nota Fiscal:</label>
            <input type="text" name="numero_nf" id="numero_nf" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="serie">Série:</label>
            <input type="text" name="serie" id="serie" class="form-control" required>
        </div>

        <!-- Informações do Emitente -->
        <h3>Emitente</h3>
        <div class="form-group">
            <label for="emitente_nome">Nome/Razão Social:</label>
            <input type="text" name="emitente_nome" id="emitente_nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="emitente_cnpj">CNPJ:</label>
            <input type="text" name="emitente_cnpj" id="emitente_cnpj" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="emitente_ie">Inscrição Estadual:</label>
            <input type="text" name="emitente_ie" id="emitente_ie" class="form-control">
        </div>
        <div class="form-group">
            <label for="emitente_endereco">Endereço:</label>
            <textarea name="emitente_endereco" id="emitente_endereco" class="form-control" rows="2" required></textarea>
        </div>

        <!-- Informações do Destinatário -->
        <h3>Destinatário</h3>
        <div class="form-group">
            <label for="destinatario_nome">Nome/Razão Social:</label>
            <input type="text" name="destinatario_nome" id="destinatario_nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="destinatario_cnpj">CNPJ/CPF:</label>
            <input type="text" name="destinatario_cnpj" id="destinatario_cnpj" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="destinatario_ie">Inscrição Estadual:</label>
            <input type="text" name="destinatario_ie" id="destinatario_ie" class="form-control">
        </div>
        <div class="form-group">
            <label for="destinatario_endereco">Endereço:</label>
            <textarea name="destinatario_endereco" id="destinatario_endereco" class="form-control" rows="2" required></textarea>
        </div>

        <!-- Dados da Nota Fiscal -->
        <h3>Dados da Nota Fiscal</h3>
        <div class="form-group">
            <label for="data_emissao">Data de Emissão:</label>
            <input type="date" name="data_emissao" id="data_emissao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipo_operacao">Tipo de Operação:</label>
            <select name="tipo_operacao" id="tipo_operacao" class="form-control" required>
                <option value="entrada">Entrada</option>
                <option value="saida">Saída</option>
            </select>
        </div>

        <!-- Totais -->
        <h3>Totais</h3>
        <div class="form-group">
            <label for="valor_total">Valor Total:</label>
            <input type="text" name="valor_total" id="valor_total" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="valor_frete">Valor do Frete:</label>
            <input type="text" name="valor_frete" id="valor_frete" class="form-control">
        </div>
        <div class="form-group">
            <label for="valor_seguro">Valor do Seguro:</label>
            <input type="text" name="valor_seguro" id="valor_seguro" class="form-control">
        </div>
        <div class="form-group">
            <label for="descontos">Descontos:</label>
            <input type="text" name="descontos" id="descontos" class="form-control">
        </div>
        <div class="form-group">
            <label for="finalidade">Finalidade:</label>
            <select name="finalidade" id="finalidade" class="form-control" required>
                <option value="venda">Venda</option>
                <option value="devolucao">Devolução</option>
                <option value="transferencia">Transferência</option>
                <option value="outros">Outros</option>
            </select>
        </div>

        <!-- Botão de Envio -->
        <button type="submit" class="btn btn-primary">Emitir Nota Fiscal</button>
    </form>
</div>
@endsection
