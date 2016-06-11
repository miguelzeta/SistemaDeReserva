@extends('Administrador.app')
@section('content')
@section('title','Lista de Usuarios')

        <!--
'RutUsuario',
'name',
'DireccionUsuario',
'FonoUsuario',
'email',
'ApellidoPaternoUsuario',
'ApellidoMaternoUsuario',
'ComunaUsuario',
'password',
-->


<!-- en href se enlazan las url se direcionan-->
<a href="{{route('Cliente.User.create')}}" class="btn btn-info">Registrar Nuevo Cliente</a><hr>
<!--SE CREA EL ESQUEMA DE LA TABLA-->
<div class="container-fluid"> <table class="table table-bordered" >
        <th>Rut</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Comuna</th>
        <th>Acciones</th>
        <tbody><div/>

        @foreach($varuser as $usuario)
            <tr>
                <td>{!!  $usuario->RutUsuario !!}</td>
                <td>{!!  $usuario->name !!}</td>
                <td>{!!  $usuario->DireccionUsuario !!}</td>
                <td>{!!  $usuario->FonoUsuario !!}</td>
                <td>{!!  $usuario->email !!}</td>
                <td>{!!  $usuario->ApellidoPaternoUsuario !!}</td>
                <td>{!!  $usuario->ApellidoMaternoUsuario !!}</td>
                <td>{!!  $usuario->ComunaUsuario !!}</td>
                <td> <a href="{{route('Cliente.User.edit',$usuario->RutUsuario)}}" class="btn btn-warning">Editar</a><a href="{{route('Cliente.User.destroy',$usuario->RutUsuario)}}" onclick="return confirm('¿Seguro Desea Eliminar Cliente ?')" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- PAGINACION-->
    <div class="text-center"> {!! $varuser->render() !!}</div>
</div>
@endsection('content')

