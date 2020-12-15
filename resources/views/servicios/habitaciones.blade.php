@extends('layout.master')
@section('content')
    <h4 style="text-align: center;">Habitaciones Registradas</h4>
    <br>
    <div class="container">
        <div class="row">
            @foreach($habitaciones as $h)
            <div class="col-md-4" >
                <div class="card" style="width: 15rem;">
                    <img src='{{url("/img/habitaciones/$h->foto")}}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Habitación: {{$h->numero}}</h5>
                        <p class="card-text">Tipo: {{$h->tipo}}
                        Camas: {{$h->numCamas}}
                        {{$h->descripcion}}
                        ${{$h->precio}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>       
    </div>
    <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
@stop