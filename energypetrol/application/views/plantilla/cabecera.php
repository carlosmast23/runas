<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url() ?>public/img/favicon.ico" type="image/x-icon" />


    <title>EnergyPetrol</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->

    <link href="<?= base_url() ?>public/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>public/css/landing-page.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

</head>

<body>

    <?php
    header('Access-Control-Allow-Origin: *');
    ?>


    <div class="container">
        <div class="row" style="margin-top: 15px;margin-bottom:15px">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <p class="mb-0">
                    <span class="mr-3"><strong>Tel:</strong> <a href="tel://#">593 2 292 3064</a></span>
                    <span><strong>Email:</strong> <a href="mailto:energypetrol@energypetrol.net">energypetrol@energypetrol.net</a></span>
                </p>

            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="https://www.facebook.com/Energypetrol-145534425528789/timeline/">
                            <i class="fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="https://twitter.com/energypetrolsa">
                            <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Navigation -->
    <!--<nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#">EnergyPetrol</a>
            <a class="btn btn-primary" href="#">Ingresar</a>
        </div>
    </nav>-->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EnergyPetrol</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>index.php/welcome/index">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>index.php/welcome/nosotros">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Productos y Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                            foreach ($consulta->result() as $fila) 
                            {                                 
                        ?>
                        <a class="dropdown-item" href="<?= base_url() ?>index.php/welcome/producto/<?php echo $fila->id ?>"><?php echo $fila->titulo ?></a>
                        <?php
                            }
                        ?>
                       
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>index.php/welcome/videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>index.php/welcome/stock">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>index.php/welcome/contactanos">Contacto</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
                <a href="<?= base_url() ?>index.php/welcome/login" class="btn btn-info" type="submit">Ingresar</a>
            </form>
        </div>
    </nav>


    <!--<div class="container ">
    <div style="height: 50px">   
</div>-->
    <!--/container-->