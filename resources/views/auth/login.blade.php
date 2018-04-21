@extends('layouts.master')

{{-- SECCION PARA ALMACENAR LOS DIFERENTES LINKS --}}
@section('links')
    <link href="../css/plantilla/bootstrap.min.css" rel="stylesheet">
    <link href="../css/auth/signin.css" rel="stylesheet">
@endsection

@section('centrado','text-center') 

@section('content')


                    <form method="POST" action="{{ route('login') }}" class="form-signin">

                        @csrf

                        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">  
                        <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>

                        {{-- EMAIL --}}
                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="email" id="email" name="email"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico" value="{{ old('email') }}" required autofocus>
                        
                        {{-- PASSWORD --}}
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" required>

                        {{-- ERRORES --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Las credenciales no coinciden con nuestros registros.
                                {{-- <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul> --}}
                            </div>
                        @endif

                        {{-- CHECKBOX --}}
                        <div class="checkbox mb-3">
                            <label>
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                            </label>
                          </div>

                          {{-- BOTONES --}}
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>

                        <p class="mt-5 mb-3 text-muted">&copy;
                          <a href="//clicktotravel.es" target="_blank">ClickToTravel 2017-2018</a>
                        </p>
                    </form>
@endsection
