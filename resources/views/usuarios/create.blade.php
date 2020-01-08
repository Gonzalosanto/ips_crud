<form action="{{ url('/usuarios')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="Username">NICKNAME DE USUARIO</label>
    <input type="text" name="Username" id="Username">
    <br>
    <label for="Nombre">Nombre DE USUARIO</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="Apellido">APELLIDO DE USUARIO</label>
    <input type="text" name="Apellido" id="Apellido">
    <br>
    <label for="Email">Email DE USUARIO</label>
    <input type="Email" name="Email" id="Email">
    <br>
    <label for="Nacionalidad">Nacionalidad DE USUARIO</label>
    <input type="text" name="Nacionalidad" id="Nacionalidad">
    <br>
    <input type="submit" value="ALTA">
</form>