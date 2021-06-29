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
                                <label for="">Banner:</label>
                                <div class="col-sm-12 col-lg-12">
                                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                                </div>
                                <br><br>
                                <div><input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título"></div>

                                <br>
                                <br>
                                <div><textarea name="Detalle" id="Detalle" cols="60" rows="10" placeholder="Detalle"></textarea></div>
                                <div><button style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane container" id="service-two" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                <label for="">Banner:</label>
                                <div class="col-sm-12 col-lg-12">
                                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                                </div>
                                <br><br>
                                <div><input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título"></div>

                                <br>
                                <br>
                                <div><textarea name="Detalle" id="Detalle" cols="60" rows="10" placeholder="Detalle"></textarea></div>
                                <div><button style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane container" id="service-three" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                <label for="">Banner:</label>
                                <div class="col-sm-12 col-lg-12">
                                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                                </div>
                                <br><br>
                                <div><input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título"></div>

                                <br>
                                <br>
                                <div><textarea name="Detalle" id="Detalle" cols="60" rows="10" placeholder="Detalle"></textarea></div>
                                <div><button style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane container" id="service-fourth" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                <label for="">Banner:</label>
                                <div class="col-sm-12 col-lg-12">
                                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                                </div>
                                <br><br>
                                <div><input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título"></div>

                                <br>
                                <br>
                                <div><textarea name="Detalle" id="Detalle" cols="60" rows="10" placeholder="Detalle"></textarea></div>
                                <div><button style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>

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

                </div>

                <div class="tab-pane container" id="service-five" style="font-size: 18px;">
                    <div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                <label for="">Banner:</label>
                                <div class="col-sm-12 col-lg-12">
                                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                                </div>
                                <br><br>
                                <div><input style="width: 49%;" name="titulo" id="titulo" type="text" placeholder="Título"></div>

                                <br>
                                <br>
                                <div><textarea name="Detalle" id="Detalle" cols="60" rows="10" placeholder="Detalle"></textarea></div>
                                <div><button style="width: 200px;float: right;" class="btn btn-primary">Guardar</button></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>