<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venda;

class VendaSeeder extends Seeder
{
    public function run()
    {
        Venda::factory()->count(10)->create(); // Cria 10 vendas fictícias
    }
}
