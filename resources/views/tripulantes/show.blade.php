<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Select</h1>
    <ul>
        <li>{{ $tripulante->id }} </li>
        <li>{{ $tripulante->nombre }} </li>
        <li>{{ $tripulante->apellido }} </li>
        <li>{{ $tripulante->rol }} </li>
        <li>{{ $tripulante->fecha_incorporacion }} </li>
        <li>{{ $tripulante->fecha_baja }} </li>
    </ul>
    <form action="{{ route('tripulantes.index')}}">
        <input type="submit" value="Volver">
      </form>
</body>
</html>