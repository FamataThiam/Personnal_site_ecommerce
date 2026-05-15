<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipantConversation extends Model
{
    protected $table = 'participant_conversations';
    protected $fillable =
    [
        'conversation_id',
        'utilisateur_id'
    ];

    protected $hidden=[
    'created_at',
    'updated_at'
    ];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
