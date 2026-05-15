<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';

    protected $fillable = [
        'nomprod',
        'description',
        'prix',
        'stock',
        'codeQr',
        'status',
        'is_promotion',
        'categorie_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(CategoriesProduit::class, 'categorie_id');  
    }
}
