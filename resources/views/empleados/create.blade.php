<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
    <link rel="stylesheet" href="{{ asset('css/styleGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/empleados/styleCreateEmpleados.css') }}">
    
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
        
        <form class="formularioEmpleado" method="POST" action="{{ route('oficinas.empleados.store', $oficina) }}">

            <h1>Crear empleado: <br>{{ $oficina->nombre }}</h1>

            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Primer Apellido:</label>
            <input type="text" name="primer_apellido" required>

            <label>Segundo Apellido:</label>
            <input type="text" name="segundo_apellido">

            <label>Rol:</label>
            <input type="text" name="rol">

            <label>Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento">

            <label>DNI:</label>
            <input type="text" name="dni" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Guardar</button>
        </form>
    </main>

    <footer>
        <p> &copy; Jaime Díaz 2025 </p>
    </footer>

</body>
</html>
