<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
