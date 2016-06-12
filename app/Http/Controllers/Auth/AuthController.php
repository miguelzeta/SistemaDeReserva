<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

public function redirigir(){
    if(\Auth::User()->type=='is_client'){

    }

}
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'RutUsuario' => 'required|max:9|min:8|numeric|unique:users',
            'name' => 'required|max:255|min:4|alpha',
            'ApellidoPaternoUsuario' => 'required|alpha|max:255',
            'ApellidoMaternoUsuario' => 'required|alpha|max:255',
            'DireccionUsuario' => 'required|max:255',
            'ComunaUsuario' => 'required|alpha|max:255',
            'FonoUsuario' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'password' =>'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'RutUsuario'=>$data['RutUsuario'],
            'name' => $data['name'],
            'DireccionUsuario'=>$data['DireccionUsuario'],
            'FonoUsuario'=>$data['FonoUsuario'],
            'email' => $data['email'],
            'ApellidoPaternoUsuario'=>$data['ApellidoPaternoUsuario'],
            'ApellidoMaternoUsuario'=>$data['ApellidoMaternoUsuario'],
            'ComunaUsuario'=>$data['ComunaUsuario'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
