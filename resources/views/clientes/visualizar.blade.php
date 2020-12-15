@extends('layout.master')
@section('content')
    <h4 style="text-align: center;">Clientes Registrados</h4>
    <br>
    <div class="container">
        <div class="row">
            @foreach($cliente as $c)
            <div class="col-md-4" >
                <div class="card" style="width: 15rem;">
                    <img src='{{url("/img/clientes/$c->foto")}}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$c->id}}: {{$c->nombre}}</h5>
                        <p class="card-text">DNI: {{$c->DNI}}
                        Genero: {{$c->genero}}
                        Dirección: {{$c->direccion}}
                        Tel: {{$c->telefono}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>       
    </div>
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
@stop