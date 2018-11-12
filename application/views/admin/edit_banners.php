<?php foreach ($DisplayBannerInfo as $data): ?>
    
<?php endforeach ?>
<div class="container">
    <h3 class="titulo">Editar Banner</h3>
    <form method="post" class="form"  enctype="multipart/form-data" action="<?php echo base_url('admin/update_banner/') . $data->id ?>">
        <div class="input-field col s12 m12 l12 input">
            <input type="text" name="url" class="input white center" value="<?php echo $data->url; ?>" placeholder="Banner URL">
        </div>
        <div class="input-field col s12 m12 l12 input">
            <input type="file" accept="images/*" name="image">
        </div>
        <div class="col s12 m12 l12">
            <a href="index_admin.html" class="yellow btn btn-small left black-text"  >Atras</a>
        <input class="green btn btn-small right" type="submit" value="Crear Banner">
        </div>
    </form>
</div>