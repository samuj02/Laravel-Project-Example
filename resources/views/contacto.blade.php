<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <h3>
        {{ $tipo }}
    </h3>

    <form method="post" action="validar-contacto">
        @csrf
        <label for="nombre">Nombre: </label><input type="text" name="nombre"><br>
        <label for="correo">Email: </label>
        <input 
            type="email"
            name="correo">
            @if($tipo == 'alumno')
                value ="@alumnos.udg.mx"
            @else
                value ="@gmail.com"
            @endif
        >
        <br>
        <label for="comentario">Mensaje: </label><textarea name="comentario"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>