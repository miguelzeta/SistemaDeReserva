<?php
namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use App\User;// LLAMA AL MODELO QUE VA A CONTROLAR PARA GUARDAR
use App\Http\Requests\UserRequest; //LLAMA AL REQUEST QUE VA A UTILIZAR
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{




    // MUESTRA LISTA DE USUARIOS
    public function index()
    {
        $varuser = User::orderBy('ApellidoPaternoUsuario', 'ASC')->paginate(4);

        return view('Cliente.index', compact('varuser'));
    }


    // MUESTRA FORMULARIO PARA CREAR USUARIOS
    public function create()
    {
        return view('Cliente.create');
    }



    // GUARDA LOS DATOS DEL CREATE DEL FORMULARIO
    public function store(UserRequest $data)
    {
      $table= new User;

        $table->       RutUsuario=$data->Input('RutUsuario');
        $table->       name = $data->Input('name');
        $table->       DireccionUsuario=$data->Input('DireccionUsuario');
        $table->       FonoUsuario=$data->Input('FonoUsuario');
        $table->       email = $data->Input('email');
        $table->       ApellidoPaternoUsuario=$data->Input('ApellidoPaternoUsuario');
        $table->       ApellidoMaternoUsuario=$data->Input('ApellidoMaternoUsuario');
        $table->       ComunaUsuario=$data->Input('ComunaUsuario');
        $table->       password = bcrypt($data->Input('password'));
        $table->save();
    }

    // MUESTRA A UN USUARIO POR SU RUT
    public function show($id)
    {
        $varuser = User::find($id);

        return view('Cliente.show', compact('varuser'));
    }


    //FORMULARIO EDITA UN USUARIO POR SU RUT
    public function edit($id)
    {

        $usuario = User::findOrFail($id);
        return view('Cliente.edit',array('usuario'=>$usuario));
    }

    // ACTUALIZA LA INFORMACION DEl FORMULARIO EDITA
    public function update($id)
    {


        echo 'updating!!';







        //$varuser = User::find($id);
        //$varuser->fill($request->all());
        /*$varuser->nombre = $request->nombre;
        $varuser->apellido_paterno = $request->apellido_paterno;
        $varuser->apellido_materno = $request->apellido_materno;
        $varuser->asignatura = $request->asignatura;*/
        //$varuser->save();

        //Flash::success("Se ha editado a:  " . $varuser->nombre . "  ,de forma exitosa");
        //return redirect()->route('Cliente.User.index');
    }
/*
 *
 * */

    // ELIMINA UN USUARIO
    public function destroy($id)
    {
        $varuser = User::find($id);
        $varuser -> delete();

        //Flash::success("Se ha eliminado a:  " . $varuser->nombre . "  ,de forma exitosa");
        return redirect()->route('Cliente.User.index');
    }

}
