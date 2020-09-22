@extends('layouts.app')

@section('content')
    <div class="" style="width: 18rem; margin: auto; margin-top: 30vh; border-radius: 15px; background: #DDD; padding: 10px;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">id {{$usuario->id}}</h5>
          <p class="card-text">Nombre:</p> <input type="text" value=" {{$usuario->name}}">
          <p class="card-text">e-mail:</p> <input type="text" value="{{$usuario->email}}">
          <button type="submit">Enviar</button>
        </div>
    </div>
@endsection