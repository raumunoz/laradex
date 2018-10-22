@extends('layouts.app')
@section('title','Trainer create')
    
@section('content')
<form class="form-group" action="/trainers" method="post">
<div class="container">
    <!--SIrve para que se use un token y evitar inyectocion de 
    codigo desde csrf-->
    @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input name="nombre" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
@endsection
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</body>
</html>
-->