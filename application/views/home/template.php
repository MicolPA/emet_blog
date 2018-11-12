<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?> | Emet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>" />
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Estimulatubebe.com</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a><i class="fab fa-facebook-f  fa-sm"></i></a></li>
                <li><a><i class="fab fa-twitter fa-sm"></i></a></li>
                <li><a><i class="fab fa-instagram fa-sm"></i></a></li>
                <li><a><i class="fab fa-youtube fa-sm"></i></a></li>
        </ul>
            </div>
    </nav>
    <div class="container center div_logo">
        <div class="container center">
                <img class="img center" src="<?php echo base_url('assets/images/estimula.png') ?>">
        </div>
        
    </div>
    <nav id="navbar" >
        <div class="nav-wrapper">
            <div class=" center">
                    <a href="#" data-activates="mobile-demo" class="button-collapse center"><i class="material-icons buttom_menu">menu</i></a>
                    <ul class="menu  hide-on-med-and-down">
                        <li class="menuli"><a href="#">Estimulación temprana</a></li>
                        <li class="menuli"><a href="<?php echo base_url('home/estimulacion_musica') ?>">Estimulacion temprana a traves de la música</a></li>
                        <li class="menuli"><a href="<?php echo base_url('home/tips') ?>">Tips</a></li>
                        <li class="menuli"><a href="<?php echo base_url('home/nosotros') ?>">¿Quiénes somos?</a></li>
                        <li class="menuli"><a href="<?php echo base_url('home/contactanos') ?>">Contactanos</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                            <li class="menuli"><a href="index.html">Estimulación temprana</a></li>
                            <li class="menuli"><a href="<?php echo base_url('home/estimulacion_musica') ?>">Estimulacion temprana a traves de la música</a></li>
                            <li class="menuli"><a href="<?php echo base_url('home/tips') ?>">Tips</a></li>
                            <li class="menuli"><a href="<?php echo base_url('home/nosotros') ?>">¿Quiénes somos?</a></li>
                            <li class="menuli"><a href="<?php echo base_url('home/contactanos') ?>">Contactanos</a></li>
                    </ul>
            </div>
        </div>
    </nav>
    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="<?php echo base_url('assets/images/3907.jpg') ?>"></a>
        <a class="carousel-item" href="#two!"><img src="<?php echo base_url('assets/images/789.jpg') ?>"></a>
    </div>
     

    <?php $this->load->view($view); ?>
    <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5>EMET</h5>
                        <p>Lorem ipsum dolor sit amet consectetatum. Velit sapissi quidem ducimus ut impedit vel doloremque optio!</p>
                        <div class="col l12">
                            <div class="col l1 s1"><i class="fab fa-facebook-f"></i></div>
                            <div class="col l1 s1"><i class="fab fa-instagram"></i></i></div>
                            <div class="col l1 s1"><i class="fab fa-youtube"></i></i></div>
                            <div class="col l1 s1"><i class="fab fa-twitter"></i></i></div>
                            <div class="col l1 s1"><i class="fab fa-google-plus-g"></i></div>
                            <div class="col l1 s1"><i class="fab fa-linkedin-in"></i></div>

                        </div>
                    </div>
                    <div class="col l4 offset-l2 s12">
                            <h5>Información</h5>
                            <ul>
                              <li><a class="" href="#!">Principal</a></li>
                              <li><a class="" href="#!">Nosotros</a></li>
                              <li><a class="" href="#!">Ventas</a></li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                        Copyright © 2018 Marketing de Contenidos. Todos los derechos reservados
                </div>
            </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</html>
<script>

  
</script>

