<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    // relacion de uno a muchos inversa
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
