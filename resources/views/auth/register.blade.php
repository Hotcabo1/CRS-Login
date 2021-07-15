@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-weight: bolder;  font-size:1.8rem;"  >{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        {{-- Input Nombre --}}
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        {{-- Nombre de usuario --}}
                        <div class="form-group row">
                                 <label for="nombreUsuario" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de Usuario') }}</label>
                            <div class="col-md-6">
                                <input id="nombreUsuario" type="text" class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{ old('nombreUsuario') }}" required autocomplete="nombreUsuario" autofocus>

                                @error('nombreUsuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Fin nombre usuario --}}


                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- input contraseña --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        {{-- input confirmar contraseña  --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        {{-- input Online  --}}
                        <div class="form-group row">
                            <label for="online" class="col-md-4 col-form-label text-md-right">{{ __('Online') }}</label>
                            <div class="col-md-6">
                                <select id="online" type="status" class="form-control @error('online') is-invalid @enderror" name="online" value="{{ old('online') }}" required autocomplete="online" class="form-select" >
                                    <option selected>-- Seleccione --</option>
                                    <option value="1">Conectado</option>
                                    <option value="0">Desconectado</option>
                                  </select>
                                @error('online')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- Select Usuario --}}
                        <div class="form-group row">
                            <label for="tipo_usuario" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Usuario') }}</label>
                            <div class="col-md-6">
                                <select id="tipo_usuario" type="tipo_usuario" class="form-control @error('tipo_usuario') is-invalid @enderror" name="tipo_usuario" value="{{ old('tipo_usuario') }}" required autocomplete="tipo_usuario" class="form-select" >
                                    <option selected >-- Seleccione --</option>
                                    <option value="AD">Administrador</option>
                                    <option value="M">Moderador</option>
                                    <option value="SP">Supervisor</option>
                                    <option value="R">Reclutador</option>
                                    <option value="G">Guardia de seguridad</option>
                                  </select>
                                @error('tipo_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- input zona --}}
                        <div class="form-group row">
                            <label for="zona" class="col-md-4 col-form-label text-md-right">{{ __('Zona') }}</label>
                            <div class="col-md-6">
                                <input id="zona" type="text" class="form-control @error('zona') is-invalid @enderror" name="zona" value="{{ old('zona') }}" required autocomplete="zona" autofocus>
                                @error('zona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- input cliente --}}
                        <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
                            <div class="col-md-6">
                                <input id="cliente" type="text" class="form-control @error('cliente') is-invalid @enderror" name="cliente" value="{{ old('cliente') }}" required autocomplete="cliente" autofocus>
                                @error('cliente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- input estatus --}}
                        <div class="form-group row">
                            <label for="Estatus" class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>
                            <div class="col-md-6">
                                <input id="Estatus" type="text" class="form-control @error('Estatus') is-invalid @enderror" name="Estatus" value="{{ old('Estatus') }}" required autocomplete="Estatus" autofocus>
                                @error('Estatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
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
