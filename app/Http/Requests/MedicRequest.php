<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class MedicRequest extends Request {


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            // nombre variables de la tabla =>  tabla usuarios

            'RutUsuario'      => 'min:9|max:12|unique:medico',
            'name'           => 'min:4|max:20',
            'ApellidoPaternoUsuario' => 'min:3|max:20',
            'email'	       => 'unique:medico',
            'password'  		=> 	'same:password'



        ];
    }

}