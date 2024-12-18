<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->decimal('preco', 10, 2); // 10 dígitos no total, 2 decimais
            $table->integer('estoque')->default(0);
            $table->string('codigo_barras')->unique();
            $table->foreignId('categoria_id')->nullable()->constrained()->onDelete('set null'); // FK para tabela de categorias
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
