<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva reseña</title>
</head>
<body>
    <h1>Nueva reseña pendiente de aprobación</h1>

    <p>Detalles de la reseña:</p>
    <ul>
        <li>Nombre: {{ $resena->nombre }}</li>
        <li>Correo electrónico: {{ $resena->email }}</li>
        <li>Calidad precio: {{ $resena->calidadPrecio }} / 5</li>
        <li>Trato personal: {{ $resena->tratoPersonal }} / 5</li>
        <li>Ubicacion: {{ $resena->ubicacion }} / 5</li>
        <li>Instalaciones y servicios: {{ $resena->instalacionServicios }} / 5</li>
        <li>Limpieza: {{ $resena->limpieza }} / 5</li>
        <li>Nota total: {{ $resena->notaFinal }} / 10</li>
        <li>Comentario: {{ $resena->comentario }}</li>
    </ul>

    <a href="https://casaelroble.net/public/resenas/" target="_blank">
        <button>CONSULTAR RESEÑAS</button>
    </a>
</body>
</html>