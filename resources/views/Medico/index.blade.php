@extends('Administrador.app')
@section('content')
@section('title','Lista de Medicos')




<!-- en href se enlazan las url se direcionan-->
<a href="{{route('Administrador.Medic.create')}}" class="btn btn-info">Registrar Nuevo Medico</a><hr>
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
        <th>DetallePerfilMedico</th>
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
                <td>{!!  $usuario->DetallePerfilMedico !!}</td>
                <td> <a href="{{route('Administrador.Medic.edit',$usuario->RutUsuario)}}" class="btn btn-warning">Editar<span class="glyphicon glyphicon-copy"></span></a><a href="{{route('Administrador.Medic.destroy',$usuario->RutUsuario)}}" onclick="return confirm('¿Seguro Desea Eliminar Medico ?')" class="btn btn-danger">Eliminar<span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- PAGINACION-->
    <div class="text-center"> {!! $varuser->render() !!}</div>
</div>
@endsection('content')

