<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $table = 'paiements';
    protected $fillable = [
        'mode',
        'montant',
        'commande_id',
        'status',
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
