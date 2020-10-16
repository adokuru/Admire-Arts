<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Art extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name',
        'art_category_id',
        'artist_id',
        'short_note',
        'amount',
        'description',
        'art_file_path',
        'slug'
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    
    }
    public function art_category()
    {
        return $this->belongsTo(ArtCategory::class, 'art_category_id');
    }
}
