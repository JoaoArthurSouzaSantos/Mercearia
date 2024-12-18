<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('itens_venda', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->foreignId('venda_id')->constrained()->onDelete('cascade'); // Relação com a venda
            $table->foreignId('produto_id')->constrained()->onDelete('cascade'); // Relação com o produto
            $table->integer('quantidade'); // Quantidade do produto vendido
            $table->decimal('preco_unitario', 10, 2); // Preço unitário do produto na venda
            $table->timestamps(); // Created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('itens_venda');
    }
};
