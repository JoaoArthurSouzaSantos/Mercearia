<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'venda_id',         // Venda à qual o item pertence
        'produto_id',       // Produto relacionado
        'quantidade',       // Quantidade do produto
        'preco_unitario',   // Preço unitário do produto na venda
    ];

    public function venda()
    {
        return $this->belongsTo(Venda::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
