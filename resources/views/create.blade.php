@extends('layouts/main')
@section('contenido')
<div class="container tipoLetra">

    <div class="card tamañoCardTableAñadir position-absolute top-50 start-50 translate-middle border-0 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="card-body">


            <div class="row">
                <div class="col-sm-6">
                  <div class="card border-0">
                    <div class="card-body">
                        <br><br>
                        <h1 class="tipoLetra text-center mx-5">World Company</h1>
                       <div class="text-center">
                        <img src="{{asset('img/AgregarUSer.gif')}}" class="tamañoPersonas" alt="">
                        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum maxime rem nemo laudantium. Veniam illum magnam obcaecati hic quisquam mollitia, ducimus nisi asperiores eius voluptatibus odio doloremque corrupti. Ipsa, necessitatibus!</p>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card border-0">
                    <div class="card-body">
                     
                        <h2 class="tipoLetra text-center mt-4 mb-4">Agregar Nuevas Actividades</h2>
                        <div class="row">
                            <div class="col">
                                <!--lleva la ruta-->
                                
                                <form action="/store" method="post">
                                    @csrf
                                    @method('POST')
                              
                                    <label for="Tipo"><h4 class="mt-2 mb-2">Tipo</h4></label>
                                    <select name="Tipo" id="Tipo"  type="text" class="form-select">
                                    <option value="Pago">Pago</option>
                                    <option value="Gasto">Gasto</option>    
                                    </select>
                    
                                    <label for="Categoria"><h4 class="mt-2 mb-2">Tipo</h4></label>
                                    <select name="Categoria" id="Categoria"  type="text" class="form-select">
                                    <option value="Gorras">Gorras</option>
                                    <option value="Playeras">Playeras</option>    
                                    <option value="Limpiesa_de_casa">Limpiesa_de_casa</option>   
                                    <option value="Creacion_de_pagina_web">Creacion_de_pagina_web</option>   
                                    </select>
                    
                                    <label for="Cantidad"><h4 class="mt-2 mb-2">Cantidad</h4></label>
                                    <input type="text" name="Cantidad" id="Cantidad" class="form-control">
                    
                                    <label for="Descripcion"><h4 class="mt-2 mb-2">Descripcion</h4></label>
                                    <input type="text" name="Descripcion" id="Descripcion" class="form-control">
                    
                                    <label for="Fecha"><h4 class="mt-2 mb-2">Fecha</h4></label>
                                    <input type="date" name="Fecha" id="Fecha" class="form-control">
                                    
                    
                                    <div class="d-grid gap-2 col-4 mx-auto mt-4 mb-4">
                                       <button class="btn btn-primary">Guardar</button>
                                    </div>
                    
                                    <!--Fin del form-->
                                </form>
                    
                                <!--el boton va fuera del form Inicio-->
                                <div class="d-grid gap-2 col-4 mx-auto mt-4 mb-4">
                                    <a href="/AltasYBajas" class="btn btn-danger border-0">Regresar</a>
                                </div>
                    
                                <!--Fin de boton-->
                    
                            </div>
                        </div>


                    </div>
                  </div>
                </div>
              </div>





        </div>
    </div>


</div>


@endsection