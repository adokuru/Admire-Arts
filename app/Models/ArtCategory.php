<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtCategory extends Model
{
    use HasFactory;

    
    public function Art()
    { 
        return $this->hasMany(Art::class, 'art_category_id', 'id');

    }
}
