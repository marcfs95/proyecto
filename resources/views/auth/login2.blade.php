@extends('layouts.master')

{{-- SECCION PARA ALMACENAR LOS DIFERENTES LINKS --}}
@section('links')
    <link href="../css/plantilla/bootstrap.min.css" rel="stylesheet">
    <link href="../css/auth/signin.css" rel="stylesheet">
@endsection

@section('centrado','text-center') 

@section('content')
<form class="form-signin" method="POST" action="{{ route('login') }}"

      {{ csrf_field()}}
      
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">  
      <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>

      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="email" name="email"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuérdame
        </label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

      <p class="mt-5 mb-3 text-muted">&copy;
        <a href="//clicktotravel.es" target="_blank">ClickToTravel 2017-2018</a>
      </p>
    </form>
@endsection