@extends('layouts/main')

@section('contenido')
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col">
<!--Fin de boton-->
<!--Fin de textto-->
<div class="card tamañoCardTable position-absolute top-50 start-50 translate-middle border-0 shadow-lg p-3 mb-5 bg-body rounded">
<div class="card-body">

<!--Inicio de table-->
<!---->
<div class="text-center">
    <img src="{{asset('img/SeccionDeTable.png')}}" class="tamañoSeccionDeTable" alt="">
</div>
<!---->
<h1 class="text-center tipoLetra">Datos Que Tienes</h1>
<table class="table table-sm tipoLetra text-center tipoLetra" id="diseñodetable">
    <hr>
    <thead>
        <tr class="text-center">
            <th class="text-center">Tipo</th>
            <th class="text-center">Categoria</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Descripcion</th>
            <th class="text-center">Fecha</th>
        

        </tr>
        <tbody>
            @foreach ($items as $item)
                

            <tr>
                <td>{{$item->Tipo}}</td>
                <td>{{$item->Categoria}}</td>
                <td>{{$item->Cantidad}}</td>
                <td>{{$item->Descripcion}}</td>
                <td>{{$item->Fecha}}</td>
      
            </tr>
            @endforeach
        </tbody>
    </thead>

</table>
<!--Fin de table-->
<!---->
<div class="row">
    <div class="col-sm-6">
      <div class="card border-0">
        <div class="card-body">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="/create" class="btn  tipoLetra rounded-circle tamañoRadius">
                    <img src="{{asset('img/Compra.png')}}" class="tamañoCompra" alt="">
                </a>
                </div>

        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card border-0">
        <div class="card-body">
            <div class="d-grid gap-2 col-6 mx-auto">
            <a href="/" class="btn btn-danger"><img src="{{asset('img/Salida.png')}}" class="tamañoDeImgEntrar" alt=""></a>
        </div>

        </div>
      </div>
    </div>
  </div>

<!---->



</div>
</div>

            </div>
        </div>
    </div>

@endsection