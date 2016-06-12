@extends('Administrador.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de nuevo Médico</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/Administrador/Medic') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('RutUsuario') ? ' has-error' : '' }}">
                                <label for="RutUsuario" class="col-md-4 control-label">Rut</label>

                                <div class="col-md-6">
                                    <input id="RutUsuario" type="text" class="form-control" name="RutUsuario" value="{{ old('RutUsuario') }}"  required/>
                                    @if ($errors->has('RutUsuario'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('RutUsuario') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  required/>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('ApellidoPaternoUsuario') ? ' has-error' : '' }}">
                                <label for="ApellidoPaternoUsuario" class="col-md-4 control-label">Apellido Paterno</label>
                                <div class="col-md-6">
                                    <input id="ApellidoPaternoUsuario" type="text" class="form-control" name="ApellidoPaternoUsuario" value="{{ old('ApellidoPaternoUsuario') }}"  required/>
                                    @if ($errors->has('ApellidoPaternoUsuario'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ApellidoPaternoUsuario') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="ejemplo@mail.com" required/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Mínimo 7 digitos" required/>
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
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required/>
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
