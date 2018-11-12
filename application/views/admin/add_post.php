<div class="container">
    <div class="row">
        <h3 class="titulo">Nuevas publicaciones</h3>
        <form method="post" class="form pt-2"  enctype="multipart/form-data" action="<?php echo base_url("admin/add_new_post/") ?>">
            <div class="input-field col s12 m12 l12 input">
                <input type="text" name="title" class="input" placeholder="Titulo del Articulo" autocomplete="off" required>
            </div>
            <div class="input-field col s12 m12 l12 input">
                <input type="text" name="author" class="input" placeholder="Autor del Articulo" autocomplete="off" required>
            </div>
            <div class="input-field col s12 m12 l12 input">
                <input type="text" name="resumen" class="input" placeholder="Resumen del Articulo" autocomplete="off" required>
            </div>
            <textarea name="content" placeholder="Texto del Articulo"></textarea>
            <div>
                <span>Foto</span>
                <input type="file" accept="image/*" name="imagen" required>
            </div>
                        <br>
                        <a href="index_admin.html" class="yellow btn btn-small left black-text"  >Atras</a>
                        <input class="green btn btn-small right" type="submit" value="Crear Articulo">
                    </form>
            </div>
    </div>