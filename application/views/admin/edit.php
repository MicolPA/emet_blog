<?php foreach ($displayPost as $data): ?>
<?php endforeach ?>

<div class="container">
    <div class="row">
        <h3 class="titulo">Editar publicacion</h3>
        <form method="post" class="form pt-2"  enctype="multipart/form-data" action="<?php echo base_url("admin/edit_post/$data->id") ?>">
            <input type="hidden" name="url" value="<?php echo $data->url ?>">
            <div class="input-field col s12 m12 l12 input">
                <input type="text" name="title" class="input" placeholder="Titulo del Articulo" value="<?php echo $data->title ?>" autocomplete="off" required>
            </div>
            <div class="input-field col s12 m12 l12 input">
                <input type="text" name="author" class="input" placeholder="Autor del Articulo" value="<?php echo $data->author ?>" autocomplete="off" required>
            </div>
            <div class="input-field col s12 m12 l12 input">
                <input type="text" name="resumen" class="input" placeholder="Resumen del Articulo" value="<?php echo $data->resumen ?>" autocomplete="off" required>
            </div>
            <textarea name="content" placeholder="Texto del Articulo"><?php echo $data->content ?></textarea>
            <div>
                <span>Foto</span>
                <input type="file" accept="image/*" name="imagen" required>
            </div>
                        <br>
                        <a href="<?php echo base_url('admin/posts') ?>" class="yellow btn btn-small left black-text"  >Atras</a>
                        <input class="green btn btn-small right" type="submit" value="Crear Articulo">
                    </form>
            </div>
    </div>