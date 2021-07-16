<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
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
                <div class="card-header text-center" >{{ __('I N C I D E N C I A S') }}</div>

                <div class="card-body">

                    <div class="col-12">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Zona</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Reporte PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Bootstrap 4 CDN and Starter Template</td>
                            <td>Cristina</td>
                            <td>2.846</td>
                            <td>16-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Bootstrap Grid 4 Tutorial and Examples</td>
                            <td>Cristina</td>
                            <td>3.417</td>
                            <td>16-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Bootstrap Flexbox Tutorial and Examples</td>
                            <td>Cristina</td>
                            <td>1.234</td>
                            <td>16-05-2021</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @else
                        <script>
                            Swal.fire(
                              '¡Sesion iniciada!',
                              '¡Correctamente!',
                            )
                            </script>
                    @endif
                    {{ __('¡Has iniciado sesion!') }}
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">




</div>

@endsection

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
