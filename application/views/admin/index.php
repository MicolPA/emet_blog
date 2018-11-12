<div  class="col l1 m1 s12 navside hide-on-med-only">
    <div class="col l1 m1  s12 home">
        <i class="material-icons icon_sidenav" id="icon1">arrow_back</i>
        <p>Inicio</p>
    </div>
    <div class="col l1 m1  s12 user">
        <i class="material-icons icon_sidenav" id="icon3">account_circle</i>
        <p>Usuario</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col l6 m8 s12">
            <div class="post z-depth-3">
                <a href="<?php echo base_url('admin/add_post'); ?>"><i class="fas fa-plus-circle add_icon" id="icon1"></i>
                <p class="add_p">Agregar articulo</p></a>
                <a href="<?php echo base_url('admin/posts') ?>" class="waves-effect waves-light btn-small">Ver articulos publicados</a>
            </div>
        </div>         
        <div class="col l6 m8 s12">
            <div class="banners z-depth-3">
                <a href="<?php echo base_url('admin/add_banners'); ?>"><i class="fas fa-plus-circle add_icon " id="icon3"></i>
                <p class="add_p">Agregar banners</p></a>
                <a href="<?php echo base_url('admin/banners') ?>" class="waves-effect waves-light btn-small">Ver banners publicados</a>
            </div>
        </div>
    </div>
    
</div>