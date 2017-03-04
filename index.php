<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/css.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>

<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="http://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">CookitApp</a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="controller/controllerMain.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view/viewLogin.php">Features</a>
                    </li>
                </ul>
                <!--Navbar icons-->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-lg-6">
                        <div class="description">
                            <h2 class="h2-responsive wow fadeInLeft">Compra la APP joputa!</h2>
                            <?php
                                echo "Hola!";
                            ?>
                            <hr class="hr-dark">
                            <p class="wow fadeInLeft" data-wow-delay="0.4s">En la HackUPC hay muchos pringados. Para más información visite este link y haga una donación para acabar con su terrible enfermedad:<a href="http://www.rdsbzlabs.com/"> Ayudales!</a></p>
                            <br>
                            <a class="btn btn-outline-white btn-lg wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>
                            <a class="btn btn-outline-white btn-lg wow fadeInLeft" data-wow-delay="0.7s">Download <i class="fa fa-android left right" aria-hidden="true"></i>
                                <i class="fa fa-apple left" aria-hidden="true"></i>
                                <i class="fa fa-windows" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-lg-4 col-lg-offset-1 flex-center">
                        <!--Form-->
                        <img src="img/mobile-home.png" alt="" class="img-fluid wow fadeInRight" id="app-mockup">
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

</header>

</body>

</html>