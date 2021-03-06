@extends('Administrador.app')

@section('title','Editando Medico')

@section('content')








    <div class="container-fluid">
        {!! Form::model($usuario,['route'=>['Medico.Medic.update',$usuario],'method'=> 'PUT','class' =>'form-horizontal']) !!}



        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',$usuario->name,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DireccionUsuario','Dirección') !!}
            {!! Form::text('DireccionUsuario',$usuario->DireccionUsuario,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('FonoUsuario','Fono') !!}
            {!! Form::text('FonoUsuario',$usuario->FonoUsuario,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ApellidoPaternoUsuario', 'Apellido Paterno',['class'=>'control-label']) !!}
            {!! Form::text('ApellidoPaternoUsuario', $usuario->ApellidoPaternoUsuario,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ApellidoMaternoUsuario', 'Apellido Materno',['class'=>'control-label']) !!}
            {!! Form::text('ApellidoMaternoUsuario',$usuario->ApellidoMaternoUsuario,['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::label('ComunaUsuario', 'ComunaUsuario',['class'=>'control-label']) !!}
            {!! Form::text('ComunaUsuario', $usuario->ComunaUsuario,['class'=>'form-control']) !!}
        </div>




        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection

