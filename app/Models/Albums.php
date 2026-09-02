<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $fillable = [
    'artist_id', 
    'title', 
    'release_year', 
    'cover_img'
    ];
}
