<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class UserRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [


			'RutUsuario'      => 'min:9|max:12',
			'name'           => 'min:4|max:20',
			'ApellidoPaternoUsuario' => 'min:3|max:20',
			'ApellidoMaternoUsuario' => 'min:3|max:20',
			'email'	       => 'unique:usuarios',
			'ComunaUsuario'       => 'min:3|max:50',




		];
	}

}
