@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil</div>
                @if(isset($mensaje))
                <div class="panel-heading">
                    {{$mensaje}}
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(['url' => 'editarPerfil', 'method' => 'GET']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellidos" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ Auth::user()->apellidos }}" required>                          
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edad" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="edad" type="number" min="0" max="120" class="form-control" name="edad" value="{{ Auth::user()->edad }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profesion" class="col-md-4 control-label">Profesión</label>

                            <div class="col-md-6">
                                <input id="profesion" type="text" class="form-control" name="profesion" value="{{ Auth::user()->profesion }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               {!! Form::submit('Guardar',null,['class' => 'btn btn-info btn-lg' , 'placeholder' => 'Guardar']); !!}
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 container">
                                <div class="col-md-6">
                                    Añade tus datos con Google+
                                </div>
                                <div id="gConnect" class="col-md-6">                                       
                                        <div id="signin-button"></div>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

