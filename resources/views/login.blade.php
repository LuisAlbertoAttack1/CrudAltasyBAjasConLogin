<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="{{'css/style.css'}}">
    <title>{{ $titulo }}</title>
</head>
<body class="fondoPrincipal">
    <div class="container">
        <div class="row">
            <div class="col">
                <!---->
        <div class="position-absolute top-50 start-50 translate-middle rounded">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded border-0">
                 <div class="card-body">
                    <!--Contenido de 2 cards-->
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="card border-0">
                            <div class="card-body">
                          <div class="text-center">
                            <img src="{{asset('img/logoPrincipal.gif')}}" class="tamañoDeImgGif" alt="">
                          </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card border-0">
                            <div class="card-body">
                                <br>
                                <h1 class="text-center tipoLetra">Login User</h1>
                                <hr>
                                <form action="{{ route('logear')}}" method="post">
                                    @csrf
                                    @method('POST')
                                    <label for="name" class="mt-3"><h2 class="tipoLetra">Usuario</h2></label>
                                    <input type="text" class="form-control" name="name">
                                    <label for="password" class="mt-3"><h2 class="tipoLetra">Password</h2></label>
                                    <input type="password" class="form-control" name="password">
                                    <!--Boton-->
                                    <div class="text-center">
                                    <button class="btn btncolor mt-3 tipoLetra" id="boton">  <img src="{{asset('img/Entrar.png')}}" class="tamañoDeImgEntrar" alt=""> <br> Entrar</button>
                                    </div>
                                    <!--Boton-->
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!--Contenido de 2 cards-->
                </div>
            </div>
        </div>
                <!---->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>