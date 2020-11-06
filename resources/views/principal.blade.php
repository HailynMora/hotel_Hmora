@extends('layout.master')
@section('content')
<div id="tit" align="center">
    <h2><p >Bienvenidos al Hotel la Riviera</p></h2>

</div>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url('/img/01.jpg')}}" class="d-block w-60" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{url('/img/02.jpg')}}" class="d-block w-60" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{url('/img/03.jpg')}}" class="d-block w-60" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{url('/img/04.jpg')}}" class="d-block w-60" alt="...">
        </div>
    </div>
    </div>
@stop