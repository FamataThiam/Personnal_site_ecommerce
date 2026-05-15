<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaPost extends Model
{
    protected $table = 'media_posts';

    protected $fillable = [
        'media_url',
        'media_type',
        'publication_id',
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
    
}
