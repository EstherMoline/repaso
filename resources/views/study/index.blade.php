<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EStudios</title>
</head>
<body>
   <h1>Lista de Estudios</h1> 
   <a href="/studies/create">Crear nueva</a>
   <table border="solid">
    <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Abreviatura</th>
    </tr>
   @foreach ($studies as $study)
        <tr>
            <td>{{ $study->code }}</td>
            <td>{{ $study->name}}</td>
            <td>{{ $study->abreviation}}</td>
            <td><a href="/studies/{{$study->id}}">Ver</a></td>
            <td><a href="/studies/{{$study->id}}/edit">Editar</a></td>
            <td>
                <form action="/studies/{{$study->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="delete">
                <input type="submit" value="borrar">
                </form>
            </td>
        </tr>
   @endforeach
   </table>
</body>
</html>