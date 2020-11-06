@extends('layout.master')
@section('content')
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Misión
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Somos un hotel de lujo cuyos asociados ponen el alma en la hospitalidad todos los días. Las necesidades de nuestros huéspedes, asociados y propietarios están a la vanguardia de todo lo que hacemos. A través de la autenticidad y la innovación, creamos experiencias únicas e inolvidables.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Visión
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      La ideología de nuestra visión  en nuestro hotel es continuar aplicando y estableciendo los más altos estándares de calidad de servicio y de esa manera justificar y mantener la reputación que tenemos entre los huéspedes, socios, competidores y la comunidad en general. Utilizamos e introducimos constantemente tecnologías y procesos respetuosos con el medio ambiente para mantener el equilibrio con la naturaleza y también satisfacer las necesidades de la sociedad contemporánea. La tradición es un testimonio de nuestro éxito, pero en el futuro también queremos aceptar los cambios que trae el tiempo moderno y ser más atractivos en el mercado y más interesantes para nuestros huéspedes y socios.
      </div>
    </div>
  </div>
  <div class="card-body">
       
        <a href="{{url('/')}}" class="btn btn-primary">Inicio</a>
    </div>
  
    
  </div>
</div>
@stop