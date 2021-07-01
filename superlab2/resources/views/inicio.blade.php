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
                                @if(isset($inicio))
                                <img id="imgBanner" src="{{asset('/superlab2/img/'.$inicio->banner)}}" width="100%" height="150px">
                                @else
                                <img id="imgBanner" src="" width="100%" height="150px">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-flex">

                    <br>
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            @if(isset($inicio))
                            <a class="nav-link active" data-toggle="pill" onclick="cambiarBanner('{{$inicio->banner}}')" href="#service-one">Inicio</a>
                            @else
                            <a class="nav-link active" data-toggle="pill" onclick="defaultBanner()" href="#service-one">Inicio</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if(isset($somos))
                            <a class="nav-link" data-toggle="pill" onclick="cambiarBanner('{{$somos->banner}}')" href="#service-two">¿Quienes somos?</a>
                            @else
                            <a class="nav-link" data-toggle="pill"onclick="defaultBanner()" href="#service-two">¿Quienes somos?</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if(isset($servicio))
                            <a class="nav-link" data-toggle="pill" onclick="cambiarBanner('{{$servicio->banner}}')" href="#service-three">Servicios</a>
                            @else
                            <a class="nav-link" data-toggle="pill" onclick="defaultBanner()" href="#service-three">Servicios</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if(isset($galeria))
                            <a class="nav-link" data-toggle="pill" onclick="cambiarBanner('{{$galeria->banner}}')" href="#service-fourth">Galería</a>
                            @else
                            <a class="nav-link" data-toggle="pill" onclick="defaultBanner()" href="#service-fourth">Galería</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if(isset($contacto))
                            <a class="nav-link" data-toggle="pill" onclick="cambiarBanner('{{$contacto->banner}}')" href="#service-five">Contacto</a>
                            @else
                            <a class="nav-link" data-toggle="pill" onclick="defaultBanner()" href="#service-five">Contacto</a>
                            @endif
                        </li>
                    </ul>

                    <br><br>

                    <div id="myTabContent" class="tab-content">

                        <div class="tab-pane container active" id="service-one" style="font-size: 18px;">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            @if(isset($inicio))
                                            <h1 class="h1" id="titulo1">
                                                {{$inicio->titulo}}
                                            </h1>
                                            @else
                                            <h1 class="h1" id="titulo1">
                                                Ejemplo titulo
                                            </h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12" style="border-bottom: 1px solid #253341;">
                                        <div class="form-group">
                                            <h3><label class="col-1-left" for="">
                                                    Descripción:
                                                </label></h3>
                                            @if(isset($inicio))
                                            <label style="text-align:justify;" for=""> {{$inicio->descripcion}}</label>
                                            @else
                                            <label style="text-align:justify;" for="">Ejemplo descripcion</label>
                                            @endif
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
                                                {{$somos->titulo}}
                                            </h1>
                                            @else
                                            <h1 class="h1" id="titulo1">
                                                Ejemplo titulo
                                            </h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12" style="border-bottom: 1px solid #253341;">
                                        <div class="form-group">
                                            <h3><label for="">
                                                    Descripción:
                                                </label></h3>
                                            @if(isset($somos))
                                            <label style="text-align:justify;" for=""> {{$somos->descripcion}}</label>
                                            @else
                                            <label style="text-align:justify;" for="">Ejemplo descripcion</label>
                                            @endif
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
                                            @if(isset($servicio))
                                            <h1 class="h1" id="titulo1">
                                                {{$servicio->titulo}}
                                            </h1>
                                            @else
                                            <h1 class="h1" id="titulo1">
                                                Ejemplo titulo
                                            </h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12" style="border-bottom: 1px solid #253341;">
                                        <div class="form-group">
                                            <h3><label for="">
                                                    Descripción:
                                                </label></h3>
                                            @if(isset($servicio))
                                            <label style="text-align:justify;" for=""> {{$servicio->descripcion}}</label>
                                            @else
                                            <label style="text-align:justify;" for="">Ejemplo descripcion</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <h2>Listado de servicios:</h2>
                                @foreach ($servicios as $ser)
                                <div style="border: 1px solid #253341; border-top: 1px solid #1DA1F2;">
                                    <h3 style="text-align: left;">{{$ser->nombre}}:</h3>
                                    <h4 style="text-align: left;">{{$ser->descripcion}}</h4>
                                </div>
                                <br>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane container" id="service-fourth">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            @if(isset($galeria))
                                            <h1 class="h1" id="titulo1">
                                                {{$galeria->titulo}}
                                            </h1>
                                            @else
                                            <h1 class="h1" id="titulo1">
                                                Ejemplo titulo
                                            </h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12" style="border-bottom: 1px solid #253341;">
                                        <div class="form-group">
                                            <h3><label for="">
                                                    Descripción:
                                                </label></h3>
                                            @if(isset($galeria))
                                            <label style="text-align:justify;" for=""> {{$galeria->descripcion}}</label>
                                            @else
                                            <label style="text-align:justify;" for="">Ejemplo descripcion</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <h3>Listado de imagenes:</h3>
                                <div id="carouselExampleControls" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner" style="width: 500px; height: 400px;">
                                        @foreach ($galerias as $gal)
                                        <div class="carousel-item @if($loop->index==0) active @endif ">
                                            <img id="item-display" src="{{asset('/superlab2/img/'.$gal->imagen)}}" class="d-block w-100" height="300px" width="300px" alt="..." style="border-radius: 20px;">
                                            <div class="carousel-caption">
                                                <p>{{$gal->descripcion}}</p>
                                            </div>
                                        </div>
                                        @endforeach
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
                            </div>
                        </div>
                        <div class="tab-pane container" id="service-five">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            @if(isset($contacto))
                                            <h1 class="h1" id="titulo1">
                                                {{$contacto->titulo}}
                                            </h1>
                                            @else
                                            <h1 class="h1" id="titulo1">
                                                Ejemplo titulo
                                            </h1>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12" style="border-bottom: 1px solid #253341;">
                                        <h3><label for="">
                                                Descripción:
                                            </label></h3>
                                        @if(isset($contacto))
                                        <label style="text-align:justify;" for=""> {{$contacto->descripcion}}</label>
                                        @else
                                        <label style="text-align:justify;" for="">Ejemplo descripcion</label>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <h3>Formulario de contacto:</h3>
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
                </div>
            </center>
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
            border-radius: 5px;
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
    <script>
        function cambiarBanner(img) {
            var imagen = document.getElementById("imgBanner");
            var nomnbre = "img/" + img;
            imagen.src = nomnbre;
        }
        function defaultBanner(){
            var imagen = document.getElementById("imgBanner");
            var nomnbre = "img/bannerDef.png";
            imagen.src = nomnbre;
        }
    </script>
</body>

</html>