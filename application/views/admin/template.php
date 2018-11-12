
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

    <!-- VEX -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vex/dist/css/vex.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/vex/dist/css/vex-theme-plain.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/vex/dist/css/vex-theme-os.css') ?>" />
</head>
<body>
    <nav>
        <div class="nav-wrapper">
                <p class="left welcome">Welcome</p>
                <ul id="nav-mobile" class="right">
                    <li class="flow-text z-depth-2 ver blue-grey darken-1"><a href="<?php echo base_url('admin/posts') ?>">Ver posts</a></li>
                    <li class="flow-text z-depth-2 ver light-blue lighten-2"><a href="<?php echo base_url('admin/add_post') ?>">Nuevo post</a></li>

                    <li class="flow-text z-depth-2 ver red" ><a href="javascript:logout();">Cerrar sesión</a></li>
                </ul>
        </div>
    </nav>
        <div class="row pb-4">
            <?php $this->load->view($view); ?>
        </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/vex/dist/js/vex.combined.min.js') ?>"></script>

    <script type="text/javascript">

        CKEDITOR.replace( 'content' );

        function deleteNews(id, noticia){
            vex.dialog.confirm({
            message: '¿Está seguro de que desea borrar la noticia?',
            className: 'vex-theme-plain',
            
                callback: function (value) {
                    if (value) {

                       if (noticia) {
                            document.body.style.cursor = "wait";
                            window.location = "<?php echo base_url('admin/deleteNews/')?>" +id;
                       } else{
                            document.body.style.cursor = "wait";
                            window.location = "<?php echo base_url('admin/delete_Banners/')?>" +id;
                       }

                    }
                }
            });
        }  


        function logout(){
            vex.dialog.confirm({
               message: '¿Está seguro de que desea cerrar sesión?',
               className: 'vex-theme-plain',

               callback: function (value) {
                    if (value) {

                        document.body.style.cursor = "wait";
                        window.location = "<?php echo base_url('auth/logout/')?>";

                    }
                } 
            });
        }     
    </script>



</html>