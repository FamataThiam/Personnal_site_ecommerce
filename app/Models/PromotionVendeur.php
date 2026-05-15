<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionVendeur extends Model
{
    protected $table = 'promotion_vendeurs';
    protected $fillable = [
        'promotion_id',
        'vendeur_id',
        'code_promotion',
    ];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function vendeur()
    {
        return $this->belongsTo(Utilisateur::class, 'vendeur_id');
    }
}
