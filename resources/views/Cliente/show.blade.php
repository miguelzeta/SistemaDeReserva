@extends('Cliente.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading"> Detalles</div>

        <table class="table table-responsive table-bordered">
            <thead>

            <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Comuna</th>


            </tr>

            </thead>

            <body>
            <tr>


                <td>{{$varuser->RutUsuario}}</td>
                <td>{{$varuser->name}}</td>
                <td>{{$varuser->DireccionUsuario}}</td>
                <td>{{$varuser->FonoUsuario}}</td>
                <td>{{$varuser->email}}</td>
                <td>{{$varuser->ApellidoPaternoUsuario}}</td>
                <td>{{$varuser->ApellidoMaternoUsuario}}</td>
                <td>{{$varuser->ComunaUsuario}}</td>


            </tr>

            </body>

        </table>



    </div>

@stop