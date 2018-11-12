<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" />

    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">
</head>
<body>
        <div class="container pt-5">
            
            <div class="row">
                <div class="col s12 center">
                    <img src="<?php echo base_url('assets/images/user.svg') ?>" width ='200px'>

                    <form method="post" class="form pt-2"  enctype="multipart/form-data" action="<?php echo base_url("auth/login/") ?>">
                         
                         <div class="input-field col s12 m12 l12 input">
                            <input type="text" name="user" class="input" placeholder="Usuario" autocomplete="off" required>
                        </div>
                        <div class="input-field col s12 m12 l12 input">
                            <input type="password" name="pass" class="input" placeholder="Contraseña" autocomplete="off" required>
                        </div>

                        <input class="left waves-effect waves-light btn-large" type="submit" value="Iniciar sesión">
                    </form>
                </div>
            </div>


        </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>


</html>