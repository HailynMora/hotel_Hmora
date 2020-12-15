@extends('layout.master')
@section('content')
    <h4 style="text-align: center;">Habitaciones Registradas</h4>
    <br>
     
        <div class="container">
            <div class="row">
                @foreach($cliente as $h)
                   
                    <div class="col-md-4" >
                        <div class="card" style="width: 15rem;">
                            <img src='{{url("/img/clientes/$h->foto")}}' class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">codigo fac: {{$h->codigoF}}</h5>
                                <p class="card-text">cliente fac: {{$h->cliente}}
                                <br>    id cliente: {{$h->id}}
                                
                                <br>    {{$h->nombre}}
                                </div>
                            </div>
                        </div>
                
                @endforeach
            </div>       
        </div>

    <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
@stop