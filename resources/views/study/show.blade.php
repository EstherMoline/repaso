<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalle de Estudio</h1> 
   <table border="solid">
    <tr>
            <th>Codigo</th>
            <td>{{ $study->code }}</td>
    </tr>
    <tr>
            <th>Nombre</th>
            <td>{{ $study->name }}</td>
    </tr>
    <tr>
            <th>Abreviatura</th>
            <td>{{ $study->abreviation }}</td>
    </tr>
   </table>
</body>
</html>