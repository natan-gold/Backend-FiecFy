<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Songs extends Model
{
    protected $table = 'songs';
    protected $fillable = [
    'album_id',
    'artist_id', 
    'title', 
    'track_never',
    'audio_path'
    ];
}
