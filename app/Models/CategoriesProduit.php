<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesProduit extends Model
{
    protected $table = 'categories_produits';

    protected $fillable = [
        'libelle',
        'description',
    ];

    
}
