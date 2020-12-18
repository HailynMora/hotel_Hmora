@extends('layout.master')
@section('content')
    <h4 style="text-align: center;">Clientes Mas frecuentes</h4>
    <br>
     
        <div class="container">
            <div class="row">
                @foreach($cliente as $h)
                   
                    <div class="col-md-4" >
                        <div class="card" style="width: 15rem;">
                            <img src='{{url("/img/clientes/$h->foto")}}' class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cliente: {{$h->nombre}}</h5>
                                <p class="card-text">Factura #: {{$h->codigoF}}
                                <p class="card-text">Fecha entrada : {{$h->salida}}
                                <p class="card-text">Fecha Salida : {{$h->salida}}
                                </div>
                            </div>
                        </div>
                
                @endforeach
            </div>       
        </div>
<br><br><br>
        <h4 style="text-align: center;">Tipo de Habitaciones</h4>
    
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Tipo</th>
            <th scope="col"># de Habitaciones</th>
            <th scope="col">Clasificación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Sencilla</th>
            <td>{{$senci}}</td>
            <td>Estandar
            <br>Ejecutiva
            <br>Superior</td>
            </tr>
            <tr>
            <th scope="row">Doble</th>
            <td>{{$doble}}</td>
            <td>Estandar
            <br>Ejecutiva
            <br>Superior</td>
            </tr>
            <tr>
            <th scope="row">Triple</th>
            <td>{{$triple}}</td>
            <td>Estandar
            <br>Ejecutiva
            <br>Superior</td>
            </tr>
            <tr>
            <th scope="row">Suite</th>
            <td>{{$suite}}</td>
            <td>Estandar
            <br>Dobler</td>
            </tr>
        </tbody>
    </table>

    <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
 
@stop