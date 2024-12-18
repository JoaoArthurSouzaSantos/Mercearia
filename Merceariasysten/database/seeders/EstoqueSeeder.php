<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estoque;

class EstoqueSeeder extends Seeder
{
    public function run()
    {
        Estoque::factory()->count(50)->create();
    }
}
