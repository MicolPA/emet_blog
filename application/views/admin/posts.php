<?php foreach ($data as $data): ?>
	<div class="row">
	    <div class="col s12 m8 ">
	      <div class="card ">
	        <div class="card-content">
	          <span class="card-title"><?php echo $data->title ?></span>
	          <p><?php echo $data->resumen ?></p>
	        </div>
	        <div class="card-action">
	          <a class="waves-effect red btn btn modal-trigger" href="javascript:deleteNews(<?php echo $data->id; ?>, true);">Borrar</a>
	          <a class="waves-effect waves-light btn" href='<?php echo base_url("admin/edit/$data->id") ?>'>Editar</a>
	        </div>
	      </div>
	    </div>
	</div>
<?php endforeach ?>


