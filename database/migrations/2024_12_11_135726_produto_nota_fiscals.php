<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produto_nota_fiscals', function (Blueprint $table) {
            $table->id();
            $table->string('numero_nf');
            $table->string('serie');
            $table->string('emitente_nome');
            $table->string('emitente_cnpj');
            $table->string('emitente_ie')->nullable();
            $table->text('emitente_endereco');
            $table->string('destinatario_nome');
            $table->string('destinatario_cnpj');
            $table->string('destinatario_ie')->nullable();
            $table->text('destinatario_endereco');
            $table->date('data_emissao');
            $table->string('tipo_operacao'); // Entrada/Saída
            $table->decimal('valor_total', 15, 2);
            $table->decimal('valor_frete', 15, 2)->nullable();
            $table->decimal('valor_seguro', 15, 2)->nullable();
            $table->decimal('descontos', 15, 2)->nullable();
            $table->string('finalidade')->nullable(); // Venda, devolução, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
