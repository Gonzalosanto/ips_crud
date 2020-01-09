

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IPS - CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand">Brand</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/usuarios')}}">Volver</a>
                    </li>                    
                </ul>
            </div>
        </nav>

        <div>
            <form action="{{ url('/usuarios')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="Username">NICKNAME DE USUARIO</label>
                <input type="text" name="Username" id="Username" required>
                <br>
                <label for="Nombre">Nombre DE USUARIO</label>
                <input type="text" name="Nombre" id="Nombre" required>
                <br>
                <label for="Apellido">APELLIDO DE USUARIO</label>
                <input type="text" name="Apellido" id="Apellido" required>
                <br>
                <label for="Email">Email DE USUARIO</label>
                <input type="Email" name="Email" id="Email" required>
                <br>
                <label for="Nacionalidad">Nacionalidad DE USUARIO</label>
                <select name="Nacionalidad">
                    <option value="Argentina">Argentina</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Chile">Chile</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Paraguay">Paraguay</option>
                  </select>
                <br>
                <input type="submit" value="ALTA">
            </form>

        </div>
    </body>
</html>