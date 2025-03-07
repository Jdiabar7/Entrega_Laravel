<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Oficinas</title>
    <link rel="stylesheet" href="{{ asset('css/styleGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/oficinas/styleIndexOficina.css') }}">
</head>

<body>

    <header>
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
        </nav>
        <nav>
            <a href="{{ route('oficinas.create') }}">Añadir Oficina</a>
        </nav>
    </header>

    <main>
        
        <ul>
            
            <h1>Listado de Oficinas</h1>


            @foreach($oficinas as $oficina)
            <li>
                <a href="{{ route('oficinas.show', $oficina) }}">{{ $oficina->nombre }}</a>
            </li>
            @endforeach
        </ul>
    </main>

    <footer>
        <p> &copy; Jaime Díaz 2025 </p>
    </footer>

</body>

</html>