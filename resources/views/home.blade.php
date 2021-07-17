@extends('layouts.theme.app')

@section('content')
<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");
    body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
    .container {
  padding: 2rem 0rem;
    }
    #icon{
        margin: 1rem;
        padding: 1rem;
    }
    h4 {
    margin: 2rem 0rem 1rem;
    }

    .table-image {
    td, th {
        vertical-align: middle;
    }
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" >{{ __('B I E N V E N I D O') }}</div>

                <div class="card-body text-center" >
                    <div class="container">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @else
                        @endif
                        {{ __('¡Has iniciado sesion!') }}
                    </div>

                    <img width="90%" src="https://thumbs.dreamstime.com/b/paisaje-oscuro-con-la-luna-llena-y-trayectoria-una-146314074.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">




</div>

@endsection
