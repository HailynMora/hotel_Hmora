@extends('layout.master')
@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('/img/07.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Habitaciones Tipo Estandar</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('/img/08.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Habitaciones Tipo Superior</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('/img/09.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Habitaciones Tipo Ejecutiva</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{url('/img/10.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Habitaciones Tipo Suite</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
  </div>
@stop