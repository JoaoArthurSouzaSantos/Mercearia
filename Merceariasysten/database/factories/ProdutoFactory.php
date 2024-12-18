<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence,
            'preco' => $this->faker->randomFloat(2, 1, 100),
            'estoque' => $this->faker->numberBetween(0, 100),
            'codigo_barras' => $this->faker->unique()->ean13,
            'categoria_id' => null, // Se você usar categorias, atribua IDs válidos aqui
        ];
    }
}
