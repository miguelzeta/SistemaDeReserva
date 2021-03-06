<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Medico;// LLAMA AL MODELO QUE VA A CONTROLAR PARA GUARDAR
use App\Http\Requests\MedicRequest; //LLAMA AL REQUEST QUE VA A UTILIZAR
//use Laracasts\Flash\Flash;

class MedicController extends Controller
{




    // MUESTRA LISTA DE USUARIOS
    public function index()
    {
        $varuser = Medico::orderBy('ApellidoPaternoUsuario', 'ASC')->paginate(4);

        return view('Medico.index', compact('varuser'));
    }


    // MUESTRA FORMULARIO PARA CREAR USUARIOS
    public function create()
    {
        return view('Medico.create');
    }



    // GUARDA LOS DATOS DEL CREATE DEL FORMULARIO
    public function store(MedicRequest $request)
    {
        //Llama al modelo para guardar
        //Varuser  es una variable local
        // El request trae todos los datos del formulario
        $varuser = new Medico($request->all());
        $varuser->password = bcrypt($request->password);// bcrypt sirve para encriptar la contraseņa
        $varuser->save();


        //Flash::success("Se ha registrado de forma exitosa");

        return redirect()->route('Administrador.Medic.index');
        /*if ($exito) {
            $varuser = Usuario::orderBy('apellido_paterno', 'ASC')->paginate(2);

            return view('admin.usuario.index', compact('varuser'));//return 'se guardo con exito';

        } else {
            return view('admin.usuario.create');
        }*/


    }

    // MUESTRA A UN USUARIO POR SU RUT
    public function show($id)
    {
        $varuser = Medico::find($id);

        return view('Medico.show', compact('varuser'));
    }


    //FORMULARIO EDITA UN USUARIO POR SU RUT
    public function edit($id)
    {

        $usuario = Medico::findOrFail($id);
        return view('Medico.edit',array('usuario'=>$usuario));
    }

    // ACTUALIZA LA INFORMACION DEl FORMULARIO EDITA
    public function update(MedicRequest $request, $id)
    {
        $varuser = Medico::find($id);
        $varuser->fill($request->all());
        /*$varuser->nombre = $request->nombre;
        $varuser->apellido_paterno = $request->apellido_paterno;
        $varuser->apellido_materno = $request->apellido_materno;
        $varuser->asignatura = $request->asignatura;*/
        $varuser->save();

        //Flash::success("Se ha editado a:  " . $varuser->nombre . "  ,de forma exitosa");
        return redirect()->route('Administrador.Medic.index');
    }


    // ELIMINA UN USUARIO
    public function destroy($id)
    {
        $varuser = Medico::findOrFail($id);
        $varuser -> delete();

        //Flash::success("Se ha eliminado a:  " . $varuser->nombre . "  ,de forma exitosa");
        return redirect()->route('Administrador.Medic.index');
    }

}
