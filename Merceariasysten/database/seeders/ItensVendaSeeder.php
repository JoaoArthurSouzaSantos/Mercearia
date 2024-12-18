<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItensVenda;

class ItensVendaSeeder extends Seeder
{
    public function run()
    {
        ItensVenda::factory()->count(30)->create(); // Cria 30 itens de vendas fictícios
    }
}
