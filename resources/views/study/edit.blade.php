<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edicion de Estudio</h1>
    <form action="/studies/{{$study->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label for="">Codigo</label>
        <input type="text" name="code" value="{{$study->code}}">

        @error('code')
            <div><small> {{$message}} </small></div>
        @enderror
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$study->name}}">
    </div>
    <div>
        <label for="">Abreviacion</label>
        <input type="text" name="abreviation" value="{{$study->abreviation}}">
    </div>
    <div>
        <input type="submit" value="Guardar">
    </div>
</form>
</body>
</html>