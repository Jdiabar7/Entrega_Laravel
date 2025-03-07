<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <link rel="stylesheet" href="{{ asset('css/styleGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/empleados/styleEditarEmpleados.css') }}">
</head>

<body>

    <header>
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
        </nav>
        <div>
            <!-- Posibles accesos directos -->
        </div>
    </header>
    
    <main>
        <form class="formularioEdicion" method="POST" action="{{ route('empleados.update', $empleado) }}">
            
            <h1>Editar Empleado: {{ $empleado->nombre }}</h1>

            @csrf
            @method('PUT')

            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $empleado->nombre }}" required>

            <label>Primer Apellido:</label>
            <input type="text" name="primer_apellido" value="{{ $empleado->primer_apellido }}" required>

            <label>Segundo Apellido:</label>
            <input type="text" name="segundo_apellido" value="{{ $empleado->segundo_apellido }}">

            <label>Rol:</label>
            <input type="text" name="rol" value="{{ $empleado->rol }}">

            <label>Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" value="{{ $empleado->fecha_nacimiento }}">

            <button type="submit">Actualizar</button>
        </form>

    </main>

    <footer>
        <p> &copy; Jaime Díaz 2025 </p>
    </footer>

</body>

</html>