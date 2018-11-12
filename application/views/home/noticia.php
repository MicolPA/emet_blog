 <div class="contenedor">
        <div class="row">
            <div class="col l2 m2 s12 aside">
                    <div class="row">
                       <?php foreach ($latestNews as $latestNews): ?>
                            <div class="l12 m12  purple darken-1 banners">
                                <div class="card purple darken-1 ">
                                    <div class="card-content white-text">
                                        <span class="card-title"><?php echo $latestNews->title ?></span>
                                        <p><?php echo $latestNews->resumen ?></p>
                                        </div>
                                        <div class="card-action">
                                            <a href="<?php echo base_url('home/noticia/') . $latestNews->url .'?id=' . $latestNews->id ?>">Leer noticia</a>
                                        </div>
                                </div>    
                            </div>
                       <?php endforeach ?>
                    </div>
            </div>
            <div class="col l10 m10 s12 container">
                <div class="parallax-container">
                   <img src="<?php echo base_url('assets/images/') . $imagen ?>" alt="<?php echo $title ?>" width='100%'>
                </div>
                <div class="post">
                    <h3 id="center-align"><?php echo $title ?></h3>

                    
                    <?php foreach ($readNew as $data): ?>
                        <span><?php echo 'Por ' . $data->author ?></span>
                        <?php echo  $data->content ?>
                    <?php endforeach ?>
                </div>
               
            </div>
           
        </div>
    </div>