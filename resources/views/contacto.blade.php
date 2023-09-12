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

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <form method="post" action="validar-contacto">
        @csrf
        <label for="nombre">Nombre: </label><input type="text" name="nombre"><br>
        <label for="correo">Email: </label>
        <input 
            type="text"
            name="correo">
        <br>

        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="comentario">Mensaje: </label><textarea name="comentario"></textarea><br>
        
        @error('comentario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>