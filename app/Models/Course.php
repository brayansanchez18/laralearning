<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    // relacion de uno a muchos entre cursos y usurios
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function requirements()
    {
        return $this->hasMany('App\Models\Requirements');
    }

    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }

    public function audience()
    {
        return $this->hasMany('App\Models\Audience');
    }

    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    //TODO: relacion de uno a muchos inversa entre cursos y usuarios
    // recupera el usuario que ha dictado un curso
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    //TODO: relacion de uno a muchos inversa

    //TODO: relacion de muchos a muchos entre cursos y usuarios
    // recupera todos los usuarios que se han inscrito al curso
    public function student()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
