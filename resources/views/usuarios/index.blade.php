<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IPS - CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('/css/styles.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
       
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
            <a class="navbar-brand">IPS - CRUD</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-primary" style="float: right;" href="{{url('usuarios/create')}}">Formulario de ALTA</a>
                    </li>                    
                </ul>
            </div>
        </nav>

        <div>
          

            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Nacionalidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$usuario->Username}}</td>
                        <td>{{$usuario->Nombre}}</td>
                        <td>{{$usuario->Apellido}}</td>
                        <td>{{$usuario->Email}}</td>
                        <td>{{$usuario->Nacionalidad}}</td>
                        <td>
                            
                            <a class="btn btn-primary boton" href="{{url('/usuarios/'.$usuario->id.'/edit')}}" >EDITAR</a>

                            
                            <form action="{{ url('/usuarios/'.$usuario->id)}}" method="post">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <button class="btn btn-primary boton" type="submit" onclick="return confirm('Esta seguro de querer borrar el registro.');">BORRAR</button>
                            
                        </form>

                        
                        </td>
                    </tr>
                    
                @endforeach    
                </tbody>
                
            </table>
            <p>Cantidad de Argentinos: {{ $cantArg  }}</p>
            <p>Cantidad de Brasileros: {{ $cantBra  }}</p>
            <p>Cantidad de Chilenos: {{ $cantChi  }}</p>
            <p>Cantidad de Bolivianos: {{ $cantBol  }}</p>
            <p>Cantidad de Uruguayos: {{ $cantUru  }}</p>
            <p>Cantidad de Paraguayos: {{ $cantPar  }}</p>
        </div>
    </body>
</html>