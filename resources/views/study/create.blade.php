<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alta de Estudio</h1>
    <form action="/studies" method="post">
    @csrf
    <div>
        <label for="">Codigo</label>
        <input type="text" name="code" value="{{old('code')}}">

        @error('code')
            <div><small> {{$message}} </small></div>
        @enderror
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{old('name')}}">
    </div>
    <div>
        <label for="">Abreviacion</label>
        <input type="text" name="abreviation" value="{{old('abreviation')}}">
    </div>
    <div>
        <input type="submit" value="Guardar">
    </div>
</form>
</body>
</html>