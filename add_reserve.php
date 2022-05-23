<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Formulaire de reservation</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading"/></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix">
                        <ul class="list-inline social-links wow pull-left">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>

                        <div class="pull-right text-right">
                            <ul class="list-inline">
                                <li>
                                    <div><i class="fa fa-envelope-o"></i> campingouin@gmail.com</div>
                                </li>
                                <li>
                                    <div class="meta-item"><i class="fa fa-mobile"></i> +33 7 68 50 79 95</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php 
     if (isset($_GET['Connexion'])){
        ?>
                    <a class="navbar-brand smoothie logo logo-light" href="index.php?Connexion=Oui"><img src="assets/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.php?Connexion=Oui"><img src="assets/img/logo_reverse.png" alt="logo"></a>
            <?php }else{?>
                    <a class="navbar-brand smoothie logo logo-light" href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.php"><img src="assets/img/logo_reverse.png" alt="logo"></a>
            <?php } ?>
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                 <?php 
     if (isset($_GET['Connexion'])){
        ?>
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accueil <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <li><a href="index-corporate-1.php?Connexion=Oui">Présentation du Camping</a></li>
                                </li>
                                <li class="dropdown-submenu">
                                    <li><a href="index-landing-1.php?Connexion=Oui">Nos différents forfaits</a></li>
                                </li>
                                <li class="dropdown-submenu">
                                    <li><a href="contact-us-1.php?Connexion=Oui">Notre équipe</a></li>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <li><a href="index-blog-1.php?Connexion=Oui">Album Photo</a></li>
                                </li>
                                <li class="dropdown-submenu">
                                    <li><a href="services-1.php?Connexion=Oui">Activités</a></li>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Inscription/Réservation <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index-shop.php?Connexion=Oui">Inscription/Se connecter</a></li>
                                <li><a href="single-product.php?Connexion=Oui">Réservation</a></li>
                            </ul>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <?php }else{?>
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accueil <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <li><a href="index-corporate-1.php">Présentation du Camping</a></li>
                                </li>
                                <li class="dropdown-submenu">
                                    <li><a href="index-landing-1.php">Nos différents forfaits</a></li>
                                </li>
                                <li class="dropdown-submenu">
                                    <li><a href="contact-us-1.php">Notre équipe</a></li>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentation <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <li><a href="index-blog-1.php">Album Photo</a></li>
                                </li>
                                <li class="dropdown-submenu">
                                    <li><a href="services-1.php">Activités</a></li>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Inscription/Réservation <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index-shop.php">Inscription/Se connecter</a></li>
                                <li><a href="single-product.php">Réservation</a></li>
                            </ul>
                        
                    </ul>
                </div>
                <?php
                 }
                ?>
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/reservation.jpg" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">Formulaire de reservation</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <?php 
                    $conn = mysqli_connect("localhost", "root", "", "reservations") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
                    $fetch = $query->fetch_array();
            ?>
                <div style = "height:300px; width:800px;">
                    <div style = "float:left;">
                        <img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
                    </div>
                    <div style = "float:left; margin-left:10px;">
                        <h3><?php echo $fetch['room_type']?></h3>
                        <h3><?php echo $fetch['price']."€ / nuit";?></h3>
                    </div>
                </div>
                <br style = "clear:both;" />
                <div class = "well col-md-4">
                    <form method = "GET" enctype = "multipart/form-data">
                        <div class = "form-group">
                            <label>Prénom</label>
                            <input type = "text" class = "form-control" id = "firstname" name = "firstname" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Nom</label>
                            <input type = "text" class = "form-control" id = "lastname" name = "lastname" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Adresse</label>
                            <input type = "text" class = "form-control" id = "adresse" name = "adresse" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Numéro de téléphone</label>
                            <input type = "text" class = "form-control" id = "contactno" name = "contactno" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Date de réservation</label>
                            <input type = "date" class = "form-control" id = "date" name = "date" required = "required" />
                        </div>
                        <br />
                        <div class = "form-group">

                        <input type="submit" id='submit' class = "btn btn-primary btn-theme"><i class = "glyphicon glyphicon-save"></i> Envoyer</a>
                        </div>
                    </form>
                </div>
            
               
        </section>

        <div id="footer-wrapper" class="footer-image-bg">
            <footer class="white-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left match-height">
                            <ul class="list-inline social-links wow">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 text-right match-height">
                            <div class="vertical-center">
                                <span class="copyright">Copyright 2021. Designed by CAMPINGOUIN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    
                <div class="widget about-us-widget mb50">
                    
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>
    <script src="assets/js/reservation.js"></script>

    

    <script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "assets/img/bg/bg1.jpg",
            "assets/img/bg/bg2.jpg",
            "assets/img/bg/bg3.jpg"
        ], {
            duration: 8000,
            fade: 500
        });
    });
    </script>

</body>

</html>
