<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable =
    [
        'contenu',
        'status',
        'conversation_id'
    ];

    protected $hidden=[
    'created_at',
    'updated_at'
    ];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
