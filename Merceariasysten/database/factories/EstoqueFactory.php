<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstoqueFactory extends Factory
{
    public function definition()
    {
        return [
            'produto_id' => Produto::factory(), // Produto fictício
            'quantidade' => $this->faker->numberBetween(-50, 50), // Negativo para saída, positivo para entrada
            'tipo_movimento' => $this->faker->randomElement(['entrada', 'saida']),
            'descricao' => $this->faker->sentence,
            'data_movimento' => $this->faker->date(),
        ];
    }
}
