<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaProduit extends Model
{
    protected $table = 'media_produits';
    protected $fillable = 
    [
        'url',
        'type',
        'produit_id'
   ];

   protected $hidden=[
   'created_at',
   'updated_at'
   ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
