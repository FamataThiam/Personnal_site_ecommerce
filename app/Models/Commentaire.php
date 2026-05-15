<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = 'commentaires';

    protected $fillable = [
        'contenu',
        'publication_id',
        'utilisateur_id',
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
