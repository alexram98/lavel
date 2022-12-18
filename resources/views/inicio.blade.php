<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
</head>

<body>
    <h1>Inicio</h1>
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route ('productos') }}" class="nav-link active" aria-current="page">Inicio</a></li>
        <li class="nav-item"><a href="{{ route ('productos') }}" class="nav-link">servicio</a></li>
        <li class="nav-item"><a href="{{ route ('productos') }}" class="nav-link">productos</a></li>
        <li class="nav-item"><a href="{{ route ('productos') }}" class="nav-link">servcios</a></li>
        <li class="nav-item"><a href="{{ route ('productos') }}" class="nav-link">mapa</a></li>
      </ul>
    </header>
    <!-- <a href="">Productos</a><br>
    <a href="">Productos</a><br>
    <a href="">Productos</a><br>
    <a href="">Productos</a><br>
    <a href="">Productos</a><br>
    <a href="{{ route ('productos') }}">Productos</a><br>
    <a href="{{ route ('productos') }}">Productos</a><br>
    <a href="/productos">Productos</a><br>
    <a href="/servicios">Servicios</a>
    <a href="/mapas">Mapas</a> -->
</body>

</html>