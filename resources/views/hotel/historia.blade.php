@extends('layout.master')
@section('content')

    <div  align="center" class="card" style="width: 18rem;" style="background-color:#feff">
    <img src="{{url('/img/05.jpg')}}" class="card-img-top" width: 18rem;>
    <div class="card-body">
        <h5 class="card-title">Historia</h5>
        <p class="card-text">Creado en 2011, en una de las zonas mas bellas de Cartagena </p>
        <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
    </div>
    </div>
    
@stop