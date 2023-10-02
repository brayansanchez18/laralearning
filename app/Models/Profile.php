<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //TODO: relacion uno a uno inversa entre perfiles y usuraios
    public function user()
    {
        // TODO: EL METODO BEONGSTO ES LA RELACION INVERSA 'PERTENECE A'
        // EN OTRAS PALABRAS ESTMOS DICIENDO QUE UN PERFIL PERTENE A UN USUSARIOS
        return $this->belongsTo('App\Models\User');
    }
}
