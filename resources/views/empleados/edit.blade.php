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

            @if ($errors->any())
                <div style="color: red; margin-bottom: 1rem;">
                    <h3>Errores al rellenar el formulario:</h3>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>

            <label>Primer Apellido:</label>
            <input type="text" name="primer_apellido" value="{{ old('primer_apellido', $empleado->primer_apellido) }}" required>

            <label>Segundo Apellido:</label>
            <input type="text" name="segundo_apellido" value="{{ old('segundo_apellido', $empleado->segundo_apellido) }}">

            <label>Rol:</label>
            <input type="text" name="rol" value="{{ old('rol', $empleado->rol) }}">

            <label>Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $empleado->fecha_nacimiento) }}">

            <label>DNI:</label>
            <input type="text" name="dni" value="{{ old('dni', $empleado->dni) }}" required>

            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', $empleado->email) }}" required>

            <button type="submit">Actualizar</button>
        </form>

    </main>

    <footer>
        <p> &copy; Jaime Díaz 2025 </p>
    </footer>

</body>

</html>
