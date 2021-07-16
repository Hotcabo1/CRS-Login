@extends('layouts.app')
{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center display-4">
                    <div class="text-center">
                        <img  width="60%"  src="https://crsseguridad.com.mx/wp-content/uploads/2020/08/crs-seguridad-privada-logotipo.png" class="navbar-logo" alt="logo">
                    </div>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombreUsuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario :') }}</label>

                            <div class="col-md-6">
                                <input id="nombreUsuario" type="text" class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{ old('nombreUsuario') }}" required autocomplete="nombreUsuario" autofocus>

                                @error('nombreUsuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña :') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesion') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                               @endif


                            </div>
                        </div>


                    </form>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
