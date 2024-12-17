<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    // Define a chave estrangeira
    protected $fillable = [
        'produto_id',
        'quantidade',
    ];

    // Relacionamento com o modelo Produto
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
