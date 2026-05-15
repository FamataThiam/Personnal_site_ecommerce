<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppreciationPublication extends Model
{
    protected $table = 'appreciation_publications';

    protected $fillable = [
        'type',
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
