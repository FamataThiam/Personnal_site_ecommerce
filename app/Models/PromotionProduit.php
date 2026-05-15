<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionProduit extends Model
{
    protected $table = 'promotion_produits';
    protected $fillable = [
        'promotion_id',
        'produit_id',
    ];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
