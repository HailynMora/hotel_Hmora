@extends('layout.master')
@section('content')
<div  align="center" class="card" style="width: 20rem;" style="background-color:#feff">
    <img src="{{url('/img/06.jpg')}}" class="card-img-top" width: 18rem;>
    <div class="card-body">
        <h5 class="card-title">Ubicación</h5>
        <p class="card-text">
            <ul class="list-group">
                <li class="list-group-item disabled" aria-disabled="true">Carrera 2a. No. 5-42 BRR RODADERO, El Rodadero, Magdalena</li>
                <li class="list-group-item">Hotel La Riviera se encuentra en la zona de Rodadero.</li>
                <li class="list-group-item">A 150 metros de Playa del Rodadero.</li>
                <li class="list-group-item">A 5 km del centro histórico de Santa Marta.</li>
                <li class="list-group-item">El Parque Nacional Natural Tayrona está a 20 km.</li>
            </ul>
        </p>
        <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
    </div>
    </div>
@stop