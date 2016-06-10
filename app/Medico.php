<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'RutUsuario';
    protected $fillable = [
        'RutUsuario',
        'name',
        'DireccionUsuario',
        'FonoUsuario',
        'email',
        'ApellidoPaternoUsuario',
        'ApellidoMaternoUsuario',
        'ComunaUsuario',
        'password',
        'DetallePerfilMedico',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table='medico';
}
