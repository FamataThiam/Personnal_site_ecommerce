<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commandes';
    protected $fillable = [
        'status',
        'total',
        'taux_reduction',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Utilisateur::class, 'client_id');
    }

    public function detailCommandes()
    {
        return $this->hasMany(DetailCommande::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}
