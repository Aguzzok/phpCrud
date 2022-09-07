Formulario de creación de empleado!

<form action="{{ url('/empleado')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>

    <label for="Nombre">Apellido</label>
    <input type="text" name="Apellido" id="Apellido">
    <br>

    <label for="Nombre">Correo</label>
    <input type="text" name="Correo" id="Correo">
    <br>

    <label for="Nombre">Numero de celular</label>
    <input type="number" name="Celular" id="Celular">
    <br>

    <label for="Nombre">Foto</label>
    <input type="file" name="Foto" id="Foto">
    <br>

    <input type="submit" value="Guardar información">

</form>