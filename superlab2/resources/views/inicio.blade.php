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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <center>
                <br>
                <div class="" style="height: 150px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <img src="{{asset('img/banner.png')}}" width="100%" height="150px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-flex">

                    <br>
                    <ul class="nav nav-pills justify-content-center">
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

                    <div id="myTabContent" class="tab-content">

                        <div class="tab-pane container active" id="service-one" style="font-size: 18px;">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            @if(isset($inicios))
                                            <h1 class="h1" id="titulo1">
                                                {{$inicios->titulo_inicio}}
                                            </h1>
                                            @else
                                            <h1 class="h1" id="titulo1">
                                                Ejemplo de titulo
                                            </h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-ms-8">
                                        <div class="well well-sm">
                                            <form>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <h5><label class="col-1-left" for="">
                                                                    Descripción:
                                                                </label></h5>
                                                            @if(isset($inicios))
                                                            <label style="text-align:justify;" for="">{{$inicios->descripcion_inicio}}</label>
                                                            @else
                                                            <label style="text-align:justify;" for="">Ejemplo descripcion</label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane container" id="service-two" style="font-size: 18px;">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            @if(isset($somos))
                                            <h1 class="h1" id="titulo1">
                                                {{$somos->titulo_somos}}
                                            </h1>
                                            @else
                                            <h1 class="h1" id="titulo1">
                                                Ejemplo de titulo
                                            </h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-ms-8">
                                        <div class="well well-sm">
                                            <form>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <h5><label for="">
                                                                    Descripción:
                                                                </label></h5>
                                                            @if(isset($somos))
                                                            <label style="text-align:justify;" for="">{{$somos->descripcion_somos}}</label>
                                                            @else
                                                            <label style="text-align:justify;" for="">Ejemplo de descripcion</label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane container" id="service-three">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            <h1 class="h1" id="titulo1">
                                                Servicios </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($servicios as $ser)
                            <div>
                                <h1>{{$ser->nombre}}</h1>
                                <h4>{{$ser->descripcion}}</h4>
                            </div>
                            @endforeach
                        </div>

                        <div class="tab-pane container" id="service-fourth">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            <h1 class="h1" id="titulo1">
                                                Galería </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <!-- form para el carrousel de las fotos del producto -->
                                    <div id="carouselExampleControls" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                                        <!-- <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div> -->
                                        <div class="carousel-inner" style="width: 500px; height: 400px;">

                                            <div class="carousel-item active">
                                                <img id="item-display" src="{{asset('img/banner.png')}}" class="d-block w-100" height="300px" width="300px" alt="..." style="border-radius: 20px;">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>LA is always so much fun!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img id="item-display" src="{{asset('img/mine.jpg')}}" class="d-block w-100" height="300px" width="300px" alt="..." style="border-radius: 20px;">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>LA is always so much fun!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img id="item-display" src="{{asset('img/banner.png')}}" class="d-block w-100" height="300px" width="300px" alt="..." style="border-radius: 20px;">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>LA is always so much fun!</p>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <br><br><br><br><br>
                                </center>
                            </div>
                            <style>
                                .carousel-caption {
                                    position: absolute;
                                    height: 400px;
                                    right: 15%;
                                    top: 300px;
                                    left: 15%;
                                    z-index: 10;
                                    padding-top: 20px;
                                    padding-bottom: 20px;
                                    color: #fff;
                                    text-align: center;
                                }
                            </style>
                        </div>

                        <div class="tab-pane container" id="service-five">
                            <!------ Include the above in your HEAD tag ---------->

                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            <h1 class="h1" id="titulo1">
                                                Contáctanos </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="well well-sm">
                                            <form method="post" action="{{ route('contactos.store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nombre">
                                                                Nombre</label>
                                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" required="required" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="correo">
                                                                Correo electronico</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                                </span>
                                                                <input type="email" class="form-control" id="coreeo" name="correo" placeholder="Ingrese el correo" required="required" />
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="comentario">
                                                                Comentario</label>
                                                            <textarea name="comentario" id="comentario" class="form-control" rows="9" cols="25" required="required" placeholder="Mensaje"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                                            Enviar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <style>
                                @import url('https://fonts.googleapis.com/css?family=Lobster');

                                body {
                                    background-color: darkslategray;
                                    font-family: 'Lobster';
                                }

                                .jumbotron {
                                    background: #358CCE;
                                    color: #FFF;
                                }

                                .jumbotron-sm {
                                    padding-top: 5px;
                                    padding-bottom: 5px;
                                }

                                .jumbotron small {
                                    color: #FFF;
                                }

                                #titulo1 small {
                                    font-size: 24px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>

</body>

</html>