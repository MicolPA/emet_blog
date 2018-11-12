<div class="content">
        <div class="container">
            <div class="descrip">
                <h4>¿Que es la estimulación temprana?</h4>
                <p>La estimulacion temprana o atencion temprana consiste en proporcionar al bebe y al infante las mejores oportunidades de desarrollo fisico, intelectual y social para que sus capacidades y habilidades
                le permitan ser mejor de que hubiera sido sin ese entorno rico en estimulos intelectuales y fisicos de calidad.
                </p>
            </div>
            <div class="articulos">

                <?php foreach ($displayHome as $data): ?>
                    <?php if ($data->id%2 == 1): ?>
                        <div class="hr"></div>
                        <div class="post">
                                <div class="row">
                                    <div class="col l12 s12 m12">
                                        <div class="col l4">
                                            <img class="left img_post" src="<?php echo base_url('assets/images/') . $data->imagen ?>">
                                        </div>
                                        <div class="col l8">
                                            <h6><?php echo $data->title; ?></h6>
                                            <p class="left descrip_post"><?php echo $data->resumen ?></p>
                                            <a href="<?php echo base_url('home/noticia/') . $data->url . '?id=' . $data->id ?>" class="btn pink btn-small left"><i class="material-icons left">visibility</i>Ver post</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <?php endif ?>
                    <?php if ($data->id%2 == 0): ?>
                        <div class="hr"></div>
                        <div class="post">
                                <div class="row">
                                    <div class="col l12 s12 m12">
                                        <div class="col l8">
                                            <h6><?php echo $data->title; ?></h6>
                                            <p class="left descrip_post"><?php echo $data->resumen ?></p>
                                            <a href="<?php echo base_url('home/noticia/') . $data->url . '?id=' . $data->id ?>" class="btn pink btn-small left"><i class="material-icons left">visibility</i>Ver post</a>
                                        </div>
                                        <div class="col l4">
                                            <img class="right img_post" rc="<?php echo base_url('assets/images/') . $data->imagen ?>">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <?php endif ?>

                <?php endforeach ?>
                
                


            </div> <!-- Fin div contenedor Articulos-->
        </div>
    </div>
    <div class="col l12 s12 m12">
            <div class="emails center">
                <h5>¿Quieres recibir más contenidos brillantes como este?</h5>
                <p></p>¡Regístrate para recibir nuestros contenidos por email y sé un miembro del Marketing de Contenidos</p>
                <div class="container">
                        <form method="POST">
                            <div class="container">
                                <div class="input-field col l12 m12 s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                                <button class="btn btn-small waves-effect green" type="submit" name="action">Enviar
                                        <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
    </div>