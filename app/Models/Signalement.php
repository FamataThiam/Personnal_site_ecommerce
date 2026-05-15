<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signalement extends Model
{
    protected $table = 'signalements';
    protected $fillable =
    [
        'raison',
        'utilisateur_id'
    ];

    protected $hidden=[
    'created_at',
    'updated_at'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
