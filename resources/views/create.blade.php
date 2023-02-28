<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulaio de creación de videojuegos</h1>
    <p><a href="{{ route('games')}}">Listar todos los juegos</a></p>

    <form action="{{ route('createVideogame') }}" method="POST">

        @csrf

        <input type="text" placeholder="Nombre del juego" name="name">
        @error('name_game')
            {{$message}}
        @enderror
        <select name="category_id" id="">
            @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{$categoria->name}}</option>
            
            @endforeach
            
            <input type="submit" value="Enviar">
        </select>
    </form>
    
</body>
</html>