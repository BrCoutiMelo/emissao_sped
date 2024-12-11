<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosNotaFiscal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nota_fiscal_id', // Chave estrangeira
        'codigo',
        'descricao',
        'unidade',
        'quantidade',
        'valor_unitario',
        'valor_total',
        'cst',
        'aliquota_icms',
        'aliquota_ipi',
        'aliquota_pis',
        'aliquota_cofins',
    ];
}
