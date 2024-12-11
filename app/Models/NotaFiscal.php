<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaFiscal extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_nf',
        'serie',
        'emitente_nome',
        'emitente_cnpj',
        'emitente_ie',
        'emitente_endereco',
        'destinatario_nome',
        'destinatario_cnpj',
        'destinatario_ie',
        'destinatario_endereco',
        'data_emissao',
        'tipo_operacao',
        'valor_total',
        'valor_frete',
        'valor_seguro',
        'descontos',
        'finalidade',
    ];    
}
