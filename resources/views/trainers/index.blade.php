@extends ('layouts.app')
@section('title','trainer create')
@section('content')
    <div class="row">
    @foreach($trainers as $trainer)
    <div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top:50px;">
  <img class="card-img-top rounded-circle mx-auto d-block tarjeta" src="images/{{$trainer->avatar}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <p class="card-text">{{$trainer->descripcion}}</p>
  <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">ver más</a>
  </div>
</div>
</div>
    @endforeach
</div>
@endsection