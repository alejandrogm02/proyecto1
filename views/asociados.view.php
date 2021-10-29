<?php
  include __DIR__ . "/partials/inicio-doc-part.php";
  include __DIR__ . "/partials/nav.part.php";
  ?>


<!-- Principal Content Start -->
   <div id="asociado">
   	  <div class="container">
   	    <div class="col-xs-12 col-sm-8 col-sm-push-2">
       	   <h1>ASOCIADOS</h1>
       	   <hr>
        <?php
        include __DIR__. "/partials/errores-part.php";
         ?>
            <?php if(("POST" === $_SERVER["REQUEST_METHOD"])&&(empty($errores))) : ?>
                <a href='<?=$urlImagen?>' target='_blank'>Ver logo</a>
            <?php endif;?>
			  <form class="form-horizontal" action="/asociados.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
  					<div class="col-xs-12">
	  					<label class="label-control" for="imagen">Logo</label>
	  					<input class="form-control-file" type="file" name="imagen">
  					</div>
				</div>
				<div class="form-group">
  					<div class="col-xs-12">
	  					<label class="label-control" for="nombre">Nombre</label>
						<textarea class="form-control" name="nombre" id="nombre"><?= $nombre;?></textarea>
					  </div>
				</div>
				<div class="form-group">
  					<div class="col-xs-12">
	  					<label class="label-control" for="description">Descripción</label>
	  					<textarea class="form-control" name="description" id="description"><?= $description;?></textarea>
	  					<button class="pull-right btn btn-lg sr-button">ENVIAR</button>
 					 </div>
                </div>
            </form>
	    </div>   
   	  </div>
   </div>
<!-- Principal Content Start -->

<?php
  include __DIR__ . "/partials/fin-dic-part.php"
  ?>