<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Albums extends Model
{
     // Força o Laravel a usar a tabela 'albums' se o model estiver no singular
    protected $table = 'albums';
    protected $fillable = [
    'artist_id', 
    'title', 
    'release_year', 
    'cover_img'
    ];

    public function songs(): HasMany 
{
  return $this-> hasMany(songs::class);
}

}

