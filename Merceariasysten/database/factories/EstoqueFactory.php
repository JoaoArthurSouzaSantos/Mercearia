<?php

namespace Database\Factories;

use App\Models\Estoque;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstoqueFactory extends Factory
{
    protected $model = Estoque::class;

    public function definition()
    {
        return [
            'produto_id' => Produto::factory(),  // Relacionando a um produto gerado pela factory
            'quantidade' => $this->faker->numberBetween(1, 100),
        ];
    }
}
