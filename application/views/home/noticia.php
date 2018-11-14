<div class="contenedor">
        <div class="post_articulos pt-4">
            <div class="container">

                <div class="row">
                    <h3><?php echo $title ?></h3>
                    <div class="col l12 s12 m12">
                        <p>Por <b><?php echo $author ?></b></p>
                    </div>
                    <img src="<?php echo base_url('assets/images/') . $imagen ?>" alt="<?php echo $title ?>" width="100%">
                    <div class="post_extract">
                        <?php echo $content ?>
                    </div>
                    
                        
                </div><!--fin row-->
            </div><!--fin container-->
               
            <div class="container pt-3">
                <h5>Artículos populares con este asunto</h5>
                    <div class="row pt-2">
                        
                        <div class="col l3 s12 m3">
                            <div class="post_relacionados">
                                <a href="https://marketingdecontenidos.com/investigacion-de-marketing-y-de-mercados/">
                                    <img width="100%" src="<?php echo base_url('assets/images/a.jpg') ?>">
                                    <br>
                                    <p>Lets take some shots!</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l3 s12 m3">
                            <div class="post_relacionados">
                                <a href="https://marketingdecontenidos.com/investigacion-de-marketing-y-de-mercados/">
                                    <img width="100%" src="<?php echo base_url('assets/images/a.jpg') ?>">
                                    <br>
                                    <p>Lets take some shots!</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l3 s12 m3">
                            <div class="post_relacionados">
                                <a href="https://marketingdecontenidos.com/investigacion-de-marketing-y-de-mercados/">
                                    <img width="100%" src="<?php echo base_url('assets/images/a.jpg') ?>">
                                    <br>
                                    <p>Lets take some shots!</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l3 s12 m3">
                            <div class="post_relacionados">
                                <a href="https://marketingdecontenidos.com/investigacion-de-marketing-y-de-mercados/">
                                    <img width="100%" src="<?php echo base_url('assets/images/a.jpg') ?>">
                                    <br>
                                    <p>Lets take some shots!</p>
                                </a>
                            </div>
                        </div>
                        
                    </div><!--fin row-->
                <div class="section_fb">
                    <div class="fb-comments" data-href="http://localhost/blog_emet/usuario_view.html" data-width="100%" data-numposts="3"></div>
                </div>
            </div><!--fin container-->
        </div><!--fin post_articulos-->
</div><!--fin contenedor-->