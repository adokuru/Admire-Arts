<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Artist extends Model
{
    use HasFactory;
  
    public function Art()
    { 
        return $this->hasMany(Art::class, 'artist_id', 'id');

    }
}
