@extends('Cliente.app')

@section('title','Editando Usuario ')

@section('content')






    <!--creacion del formulario   'route' => 'admin.users.store', 'method' => 'POST'-->

    <div class="container-fluid">
        {!! Form::model($usuario,['route'=>['Cliente.User.update',$usuario],'method'=> 'PUT','class' =>'form-horizontal']) !!}



        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',$usuario->name,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DireccionUsuario','Nombre') !!}
            {!! Form::text('DireccionUsuario',$usuario->DireccionUsuario,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('FonoUsuario','Nombre') !!}
            {!! Form::text('FonoUsuario',$usuario->FonoUsuario,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ApellidoPaternoUsuario', 'Apellido Paterno',['class'=>'control-label']) !!}
            {!! Form::text('ApellidoPaternoUsuario', $usuario->ApellidoPaternoUsuario,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ApellidoMaternoUsuario', 'Apellido Materno',['class'=>'control-label']) !!}
            {!! Form::text('ApellidoMaternoUsuario',$usuario->ApellidoMaternoUsuario,['class'=>'form-control','required']) !!}
        </div>



        <div class="form-group">
            {!! Form::label('ComunaUsuario', 'Asignatura',['class'=>'control-label']) !!}
            {!! Form::text('ComunaUsuario', $usuario->ComunaUsuario,['class'=>'form-control','required']) !!}
        </div>




        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection