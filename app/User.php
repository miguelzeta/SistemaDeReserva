<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable,CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
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

