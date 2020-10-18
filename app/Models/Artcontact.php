<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artcontact extends Model
{
    use HasFactory;

    protected $fillable = [
        'art_id',
        'contact_name',
        'contact_email',
        'note'
    ];
}
