<?php 
  session_start();
  include ('../layouts/header.php');
?>
<br/>
<br/>
<br/>
			<div class="row">
				<div class="col-md-6">
					<form id="formulario4" role="form">
					  <div class="form-group">
						<label for="nombre">Nombre: </label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Por ejemplo: Portero"/>
					  </div>
					  <div class="form-group">
						<label for="abreviatura">Abreviatura: </label>
						<input type="text" class="form-control" id="abreviatura" name="abreviatura" />
					  </div>
					  <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>	
<?php include ('../layouts/footer.php'); ?>