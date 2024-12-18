<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->foreignId('cliente_id')->nullable()->constrained()->onDelete('set null'); // Cliente opcional
            $table->decimal('total', 10, 2); // Total da venda
            $table->date('data_venda'); // Data da venda
            $table->timestamps(); // Created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendas');
    }
};
