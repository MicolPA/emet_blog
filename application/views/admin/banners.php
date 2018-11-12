<?php foreach ($displayBanners as $data): ?>
	<div class="row">
	    <div class="col s12 m8 ">
	    	<div class="col l6">
	    		<img src="<?php echo base_url('assets/images/') . $data->image ?>" width=100%>
	    	</div>
	    	<div class="col l6">
	    		<a href="<?php echo $data->url ?>" class="btn blue darken-2 col l12">Probar link</a>
		    	<a href="<?php echo base_url('admin/edit_banner/'). $data->id ?>" class="btn col l12 mt-2">Editar</a>
		    	<a  href="javascript:deleteNews(<?php echo $data->id; ?>, false);" class="btn red accent-3 col l12 mt-2">Borrar</a>
	    	</div>
	    </div>
	</div>
<?php endforeach ?>


