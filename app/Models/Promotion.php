<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';
    protected $fillable = [
        'titre',
        'description',
        'Type_reduction',
        'prix_reduit',
        'date_debut',
        'date_fin',
        'type_promotion',
    ];

    public function vendeurs()
    {
        return $this->belongsToMany(Utilisateur::class, 'promotion_vendeurs', 'promotion_id', 'vendeur_id');
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'promotion_produits', 'promotion_id', 'produit_id');   
    }
}
