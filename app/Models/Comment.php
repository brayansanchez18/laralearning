<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //TODO: relacion de tabla polimorfica
    public function commentable()
    {
        return $this->morphTo();
    }

    //relacion de uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // relacion de uno a muchos polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reactions', 'reactionable');
    }
}
