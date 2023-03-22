<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Aviso de CuidaTe</title>
</head>
<body>
    <p>Hola! Se ha reportado un nuevo caso de emergencia a las {{ $avisoCall->created_at }}.</p>
    <p>Estos son los datos del usuario que ha realizado la denuncia:</p>
    <ul>
        <li>Nombre: {{ $avisoCall->user->name }}</li>
        <li>Teléfono: {{ $avisoCall->user->phone }}</li>
    </ul>
    <p>Y esta es la posición reportada:</p>
    <ul>
        <li>Latitud: {{ $avisoCall->lat }}</li>
        <li>Longitud: {{ $avisoCall->lng }}</li>
        <li>
            <a href="https://www.google.com/maps/dir/{{ $avisoCall->lat }},{{ $avisoCall->lng }}">
                Ver en Google Maps
            </a>
        </li>
    </ul>
</body>
</html>