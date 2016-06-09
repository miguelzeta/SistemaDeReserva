<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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
        'type',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

