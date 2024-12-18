<?php

namespace Database\Factories;

use App\Models\Venda;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendaFactory extends Factory
{
    protected $model = Venda::class;

    public function definition()
    {
        return [
            'cliente_id' => Cliente::factory(), // Cria um cliente fictício
            'total' => $this->faker->randomFloat(2, 50, 1000), // Total aleatório
            'data_venda' => $this->faker->date(), // Data aleatória
        ];
    }
}
