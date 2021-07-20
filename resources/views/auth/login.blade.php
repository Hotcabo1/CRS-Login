<style>
    body {
  margin: 0;
  padding: 0;
  overflow-y: hidden;
}
.bg-video-wrap {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 100vh;
  /* background: url(https://designsupply-web.com/samplecontent/vender/codepen/20181014.png) no-repeat center center/cover; */
}
video {
  min-width: 100%;
  min-height: 100vh;
  z-index: 1;
}
.overlay {
  width: 100%;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  background-image: linear-gradient(45deg, rgba(0,0,0,.3) 50%, rgba(0,0,0,.7) 50%);
  background-size: 3px 3px;
  z-index: 2;
}
</style>

@extends('layouts.app')
{{-- @extends('layouts.app') --}}



@section('content')



<div class="bg-video-wrap" style="margin-top: -2rem;">
    <video src="https://crsseguridad.live/intranet/crs1.mp4" loop muted autoplay></video>
      <div class="overlay">
        <div class="container" style="margin-top: 2rem;">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card bg-transparent border-0">
                        <div class="card-header bg-transparent text-center">
                            <div class="text-center">
                                <img  width="50%"  src="https://crsseguridad.live/intranet/img/crs.png" class="navbar-logo" alt="logo">
                            </div>
                        </div>

                        <div class="card-body bg-transparent">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="nombreUsuario" class="text-white col-md-4 col-form-label text-md-right">{{ __('Usuario :') }}</label>

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
                                    <label for="password" class="text-white col-md-4 col-form-label text-md-right">{{ __('Contraseña :') }}</label>

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

                                            <label class="form-check-label text-white" for="remember">
                                                {{ __('Mantener sesion') }}
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
    </div>

</div>
  @endsection
