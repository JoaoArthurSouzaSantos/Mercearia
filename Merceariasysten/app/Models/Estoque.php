<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',   // ID do produto relacionado
        'quantidade',   // Quantidade adicionada ou removida
        'tipo_movimento', // Entrada ou saída
        'descricao',    // Detalhes da movimentação
        'data_movimento', // Data da movimentação
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
