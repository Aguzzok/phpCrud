Mostrar la lista de empleados :D
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->Apellido}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td>{{ $empleado->Celular}}</td>
            <td>{{ $empleado->Foto}}</td>
            <td>Editar | Borrar</td>
        </tr>
        @endforeach 
    </tbody>
</table>