@extends ('layouts.app')
@section('title','show')
@section('content')
<img   class="card-img-top rounded-circle mx-auto d-block imgDetalles" src="/images/{{$trainer->avatar}}" alt="Card image cap">
<div class="text-center">
    <h5>{{$trainer->name}}</h5>
<h1>{{$trainer->slug}}</h1>
    <p>{{$trainer->descripcion}}</p>
    <br>
    se unió: <span>{{$trainer->created_at}} </span>
    <a href="{{$trainer->slug}}/edit" class="btn btn-primary ">Editar</a>
    <a href="{{$trainer->slug}}/edit" class="btn btn-danger ">Eliminar</a>

</div>
@endsection