<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //TODO RELACION UNO A UNO ENTRE USUARIOS Y PERFILES
    // UN USUARIOS SOLO POUEDE TENER UN PERFIL Y UN PERFIL SOLO PUEDE PERTENECER A UN USUARIO
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    //TODO: relacion uno a muchos entre usuarios y cursos
    // curos dictados = un usuario (profesor) puede tener variso cursos
    public function courses_dictated()
    {
        return $this->hasMany('App\Models\Course');
    }

    // relacion uno a muchos entre usuarios y review
    // un curso puede tener varios reviews
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function reaction()
    {
        return $this->hasMany('App\Models\Reaction');
    }

    //TODO: relacion de muchos a mcuhos entre usuarios y cursos
    // cursos enrolled = muchos usuarios pueden estar matrriculados a muchos cursos
    public function courses_enrolled()
    {
        return $this->belongsToMany('App\Models\Course')->withTimestamps();
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Models\Lessons');
    }
}
