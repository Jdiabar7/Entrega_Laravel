<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Oficina</title>
    <link rel="stylesheet" href="{{ asset('css/styleGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/oficinas/styleCreateOficinas.css') }}">
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
        <form method="POST" action="{{ route('oficinas.store') }}">
            

            <h1>Crear Oficina</h1>

            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Dirección:</label>
            <input type="text" name="direccion">

            <button type="submit">Guardar</button>
        </form>
    </main>

    <footer>
        <p> &copy; Jaime Díaz 2025 </p>
    </footer>

</body>
</html>
