@extends('layouts/main')

@section('contenido')

<div class="container">
  <div class="row">
    <div class="col">
    <!---->
    <div class="card position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body rounded border-0">
      <div class="card-body">
<!---->
<div class="row">
  <div class="col-sm-6">
    <div class="card border-0">
      <div class="card-body">
        <h1 class="tipoLetra text-center">World Company</h1>
        <h5 class="text-center tipoLetra">Veremos Cuantos Son Tus Gastos</h5>
       <div class="text-center">
        <img src="{{asset('img/Personas.png')}}" class="tamañoPersonas" alt="">
       </div>
       
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card border-0">
      <div class="card-body">
       <!---->
       <h4 class="tipoLetra">Puedes Dar De Alta mas informacion dando click en el boton y agregar nuevos datos</h4>
      
       <a class="btn btn-secondary border-0 mt-3 mb-3" href=" /AltasYBajas "><h5 class="tipoLetra">Altas y Bajas</h5></a>
      <br> 
      <div class="row">
        <div class="col-sm-6">
          <div class="card border-0">
            <div class="card-body">
              <label><h4 class="tipoLetra text-center">Total De Ganancias <br> {{ $totalPagos }}</h4></label>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card border-0">
            <div class="card-body">
              <label><h4 class="tipoLetra text-center">Total De Gastos  {{ $totalGastos }}</h4></label>
            </div>
          </div>
        </div>
      </div>
      <!---->
      <br>
     <div class="text-center">
      <a class="btn btn-danger " href="{{ route('logout') }}"><img src="{{asset('img/Salida.png')}}" class="tamañoDeImgEntrar" alt=""></a>
    </div>
      <!---->
       <!---->
      </div>
    </div>
  </div>
</div>




<!---->
      </div>
    </div>
    <!---->
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col">
     
    </div>
  </div>
</div>

@endsection