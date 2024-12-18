<?php

namespace Database\Factories;

use App\Models\ItensVenda;
use App\Models\Venda;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItensVendaFactory extends Factory
{
    protected $model = ItensVenda::class;

    public function definition()
    {
        return [
            'venda_id' => Venda::factory(),  // Cria uma venda fictícia
            'produto_id' => Produto::factory(), // Cria um produto fictício
            'quantidade' => $this->faker->numberBetween(1, 10), // Quantidade aleatória
            'preco_unitario' => $this->faker->randomFloat(2, 1, 100), // Preço unitário aleatório
        ];
    }
}
