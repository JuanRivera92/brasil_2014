<?php 
  session_start();
  include ('../layouts/header.php');
?>
<br/>
<br/>
<br/>		
	
			<div class="row">
				<div class="col-md-6">
					<form id="formulario3">
					  <div class="form-group">
						<label for="nombre">Nombre: </label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Por ejemplo: M&eacute;xico"/>
					  </div>
					  <div class="form-group">
						<label for="bandera">Bandera: </label>
						<input type="file" id="bandera" name="bandera"/>
					  </div>
					  <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>	
			</div>
<?php include ('../layouts/footer.php'); ?>		