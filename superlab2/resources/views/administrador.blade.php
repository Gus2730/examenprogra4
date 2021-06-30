<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>Inicio</title>
</head>

<body>


    <!-- <div class="card mt-5">
        <div class="card-header">
            Crear Imagen
        </div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('galeria.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="imagen">Imagen</label>
                    <input type="text" class="form-control" name="imagen" />
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" />
                </div>
                <button type="submit" class="btn btn-block btn-primary">Agregar</button>
            </form>
        </div>
    </div> -->
    <div style="text-align: center;">
        <h1>Bienvenido administrador</h1>
    </div>
    <br>
    <div id="pagos">
        <div class="col-flex">

            <br>
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#service-one">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#service-two">¿Quienes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#service-three">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#service-fourth">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#service-five">Contacto</a>
                </li>
            </ul>

            <br><br>

            <div id=" myTabContent" class="tab-content">

                <div class="tab-pane container active" id="service-one" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                @if(isset($inicio))
                                <form method="post" action="{{ route('secciones.update',$inicio->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="inicio">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" value="{{$inicio->titulo}}" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion">{{$inicio->descripcion}}</textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @else
                                <form method="post" action="{{ route('secciones.store') }}">
                                    @csrf
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="inicio">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion"></textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane container" id="service-two" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                @if(isset($somos))
                                <form method="post" action="{{ route('secciones.update',$somos->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="somos">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" value="{{$somos->titulo}}" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion">{{$somos->descripcion}}</textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @else
                                <form method="post" action="{{ route('secciones.store') }}">
                                    @csrf
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="somos">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion"></textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane container" id="service-three" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                @if(isset($servicio))
                                <form method="post" action="{{ route('secciones.update',$servicio->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="servicio">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" value="{{$servicio->titulo}}" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion">{{$servicio->descripcion}}</textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @else
                                <form method="post" action="{{ route('secciones.store') }}">
                                    @csrf
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="servicio">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion"></textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @endif
                            </div>


                            <hr>
                            <div class="col-md-12">
                                <label for="">Servicios</label>
                                <div id="tableview2">
                                    <table class="table table-striped table-dark" id="table">
                                        <thead>
                                            <tr align="center">
                                                <td>Nombre </td>
                                                <td>Descripcion</td>
                                                <td>Acción</td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbTable">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane container" id="service-fourth" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                @if(isset($galeria))
                                <form method="post" action="{{ route('secciones.update',$galeria->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="galeria">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" value="{{$galeria->titulo}}" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion">{{$galeria->descripcion}}</textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @else
                                <form method="post" action="{{ route('secciones.store') }}">
                                    @csrf
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="galeria">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion"></textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <!--Card image-->
                                <div class="view overlay">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">

                                            <div class="carousel-item">
                                                <img src="{{asset('img/banner.png')}}" height="200" class="d-block w-100" alt="...">
                                            </div>

                                        </div>

                                    </div>
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <div class="card-body text-center">

                                    <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    <button id=" btn_carrito" name="btn_carrito" value="btn_carrito" type="submit" class="btn btn-primary" style="display: inline-block;"><i class="fas fa-cart-plus"></i></button>
                                    <button id=" btn_deseo" name="btn_deseo" value="btn_deseo" type="submit" class="btn btn-primary" style="display: inline-block;"><i class="fas fa-heart"></i></button>


                                </div>
                                <style>
                                    html,
                                    body,
                                    header,
                                    .carousel {
                                        height: 60vh;
                                    }

                                    @media (max-width: 740px) {

                                        html,
                                        body,
                                        header,
                                        .carousel {
                                            height: 100vh;
                                        }
                                    }

                                    @media (min-width: 800px) and (max-width: 850px) {

                                        html,
                                        body,
                                        header,
                                        .carousel {
                                            height: 100vh;
                                        }
                                    }

                                    .view,
                                    body,
                                    html {
                                        height: 100%
                                    }

                                    .carousel {
                                        height: 50%
                                    }

                                    .carousel .carousel-inner,
                                    .carousel .carousel-inner .active,
                                    .carousel .carousel-inner .carousel-item {
                                        height: 50%
                                    }
                                </style>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane container" id="service-five" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                @if(isset($contacto))
                                <form method="post" action="{{ route('secciones.update',$contacto->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="contacto">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" value="{{$contacto->titulo}}" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion">{{$contacto->descripcion}}</textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @else
                                <form method="post" action="{{ route('secciones.store') }}">
                                    @csrf
                                    <label for="">Banner:</label>
                                    <input type="hidden" id="seccion" name="seccion" value="contacto">
                                    <div class="col-sm-12 col-lg-12">
                                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg">
                                    </div>
                                    <br><br>
                                    <div>
                                        <input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título">
                                    </div>
                                    <br>
                                    <br>
                                    <div><textarea name="descripcion" id="descripcion" cols="60" rows="10" placeholder="Descripcion"></textarea></div>
                                    <div><button type="submit" style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>
                                </form>
                                @endif
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <label for="">Servicios</label>
                                <div id="tableview2">
                                    <table class="table table-striped table-dark" id="table">
                                        <thead>
                                            <tr align="center">
                                                <td>Nombre </td>
                                                <td>Correo</td>
                                                <td>Mensaje</td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbTable">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>