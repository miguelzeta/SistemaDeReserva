@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('RutUsuario') ? ' has-error' : '' }}">
                            <label for="RutUsuario" class="col-md-4 control-label">Rut</label>

                            <div class="col-md-6">
                                <input id="RutUsuario" type="text" class="form-control" name="RutUsuario" value="{{ old('RutUsuario') }}">

                                @if ($errors->has('RutUsuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RutUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>









                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('DireccionUsuario') ? ' has-error' : '' }}">
                            <label for="DireccionUsuario" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="DireccionUsuario" type="text" class="form-control" name="DireccionUsuario" value="{{ old('DireccionUsuario') }}">

                                @if ($errors->has('DireccionUsuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DireccionUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('FonoUsuario') ? ' has-error' : '' }}">
                            <label for="FonoUsuario" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="FonoUsuario" type="text" class="form-control" name="FonoUsuario" value="{{ old('FonoUsuario') }}">

                                @if ($errors->has('FonoUsuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('FonoUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('ApellidoPaternoUsuario') ? ' has-error' : '' }}">
                            <label for="ApellidoPaternoUsuario" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="ApellidoPaternoUsuario" type="text" class="form-control" name="ApellidoPaternoUsuario" value="{{ old('ApellidoPaternoUsuario') }}">

                                @if ($errors->has('ApellidoPaternoUsuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ApellidoPaternoUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('ApellidoMaternoUsuario') ? ' has-error' : '' }}">
                            <label for="ApellidoMaternoUsuario" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="ApellidoMaternoUsuario" type="text" class="form-control" name="ApellidoMaternoUsuario" value="{{ old('ApellidoMaternoUsuario') }}">

                                @if ($errors->has('ApellidoMaternoUsuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ApellidoMaternoUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('ComunaUsuario') ? ' has-error' : '' }}">
                            <label for="ComunaUsuario" class="col-md-4 control-label">Comuna Usuario</label>

                            <div class="col-md-6">
                                <input id="ComunaUsuario" type="text" class="form-control" name="ComunaUsuario" value="{{ old('ComunaUsuario') }}">

                                @if ($errors->has('ComunaUsuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ComunaUsuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
