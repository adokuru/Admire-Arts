<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Artist extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    
    }
}
