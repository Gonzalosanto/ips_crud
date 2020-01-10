        
@extends('layout')


@section('content')
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">IPS - CRUD</a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                
                
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="{{url('usuarios/create')}}">Formulario de ALTA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="{{url('usuarios')}}">Listado</a>
                </li>
                </ul>
                
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{url('/busqueda/')}}">
                    
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
                </form>
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
           
            
        </div>
        @endsection