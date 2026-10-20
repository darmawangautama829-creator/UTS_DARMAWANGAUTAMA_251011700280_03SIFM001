<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title', 'artist', 'album', 'genre', 'duration', 'image', 'release_year',
    ];
}
