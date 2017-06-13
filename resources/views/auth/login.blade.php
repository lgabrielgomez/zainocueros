@extends('mainweb.layout')

@section('content')
  <div class="row">
    {{ Form::open(['route' => 'do.login' , 'class' => 'col s12 m4 offset-m4 center-align', 'style' => 'margin-top: 25px']) }}
      <div class="col s8 offset-s2">
        <img src="{{ asset('images/zaino-logo.png') }}" class="responsive-img">
      </div>
      <div class="col s12">
        <div class="card z-depth-4 left-align">
          <div class="row">
            <div class="col s12 center" style="margin-top: 20px">
              <h6 class="blue-grey-text">Ingresa tus datos para iniciar sesión</h6>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password">
                <label for="password">Contraseña</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 right-align">
                <button type="button" onclick="window.history.back()" class="btn waves-effect waves-light red">
                  <i class="material-icons">fast_rewind</i>
                </button>
                <button type="submit" class="btn waves-effect waves-light cyan">
                  <i class="material-icons">done</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    {{ Form::close() }}
  </div>
@endsection

@section('pageScripts')
@endsection
