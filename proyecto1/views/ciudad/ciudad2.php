<?php 
  session_start();
  include ('../layouts/header.php');
?>
	<br/>
	<br/>
	<br/>
		<div class="row">
			<div class="col-md-6">
				<form id="formulario2">
				  <div class="form-group">
					<label for="Nombre">Nombre: </label>
					<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="">
				  </div>
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>	
			
<?php include ('../layouts/footer.php'); ?>
