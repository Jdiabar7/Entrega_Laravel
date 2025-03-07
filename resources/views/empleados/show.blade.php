<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Empleado</title>
    <link rel="stylesheet" href="{{ asset('css/styleGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/empleados/styleShowEmpleado.css') }}">
</head>
<body>

<header>
    <nav>
        <a href="{{ route('home') }}">Inicio</a>
    </nav>
</header>

<main>
    <div class="contenidoPagina">
        <h1>Datos del Empleado</h1>
        <div class="datosEmpleado">
            <p class="pLinea"><strong>Nombre:</strong> <p class="pDatos"> {{ $empleado->nombre }}</p></p>
            <p class="pLinea"><strong>Primer Apellido:</strong> <p class="pDatos"> {{ $empleado->primer_apellido }}</p></p>
            <p class="pLinea"><strong>Segundo Apellido:</strong> <p class="pDatos"> {{ $empleado->segundo_apellido }}</p></p>
            <p class="pLinea"><strong>Rol:</strong> <p class="pDatos"> {{ $empleado->rol }}</p></p>
            <p class="pLinea"><strong>Fecha de Nacimiento:</strong> <p class="pDatos"> {{ $empleado->fecha_nacimiento }}</p></p>
            <p class="pLinea"><strong>DNI:</strong> <p class="pDatos"> {{ $empleado->dni }}</p></p>
            <p class="pLinea"><strong>Email:</strong> <p class="pDatos"> {{ $empleado->email }}</p></p>
        </div>
    </div>
</main>

<footer>
    <p> &copy; Jaime Díaz 2025 </p>
</footer>

</body>
</html>
