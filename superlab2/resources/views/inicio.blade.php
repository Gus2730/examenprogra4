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
                                <img src="img/banner.png" width="100%" height="150px">
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
                            <h1>HOLA1</h1>
                        </div>

                        <div class="tab-pane container" id="service-two" style="font-size: 18px;">
                            <h1>HOLA2</h1>
                        </div>
                        <div class="tab-pane container" id="service-three">
                            <h1>HOLA3</h1>
                        </div>
                        <div class="tab-pane container" id="service-fourth">
                            <h1>HOLA4</h1>
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
                                    <div class="col-md-8">
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
                                .jumbotron {
                                    background: #358CCE;
                                    color: #FFF;
                                    border-radius: 0px;
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