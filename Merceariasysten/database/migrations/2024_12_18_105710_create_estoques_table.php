<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained()->onDelete('cascade'); // FK para tabela produtos
            $table->integer('quantidade'); // Quantidade positiva (entrada) ou negativa (saída)
            $table->enum('tipo_movimento', ['entrada', 'saida']); // Tipo da movimentação
            $table->string('descricao')->nullable(); // Descrição da movimentação
            $table->date('data_movimento'); // Data da movimentação
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estoques');
    }
};
