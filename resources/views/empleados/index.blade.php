<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados</title>
    <link rel="stylesheet" href="{{ asset('css/styleGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/empleados/styleIndexEmpleado.css') }}">
</head>
<body>

<header>
    <nav>
        <a href="{{ route('home') }}">Inicio</a>
    </nav>
    <nav>
        <a href="{{ route('oficinas.empleados.create', $oficina) }}">Añadir Empleado</a>
    </nav>
</header>

<main>
    <ul>
        <h1>Empleados de {{ $oficina->nombre }}</h1>
        @foreach($empleados as $empleado)
            <li>
                <!-- Nombre del empleado lleva a la página de detalle -->
                <a class="datoEmpleado" href="{{ route('empleados.show', $empleado) }}">
                    {{ $empleado->nombre }} ({{ $empleado->dni }})
                </a>
                <!-- Botón para editar al empleado -->
                <a class="editarEmpleado" href="{{ route('empleados.edit', $empleado) }}" style="margin-left: 10px; color: blue;">Editar</a>
            </li>
        @endforeach
    </ul>
</main>

<footer>
    <p> &copy; Jaime Díaz 2025 </p>
</footer>

</body>
</html>
