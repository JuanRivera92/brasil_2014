<?php 
  session_start();
  include ('../layouts/header.php');
?>	
	<br/>
	<br/>
	<br/>
	<div class="row">
		<div class="col-md-6">
			<form role="form">
			  <div class="form-group">
				<label for="nombre">Nombre: </label>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Continente
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					 <li><a>America</a></li>
					 <li><a>Africa</a></li>
				</ul>
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>	
<?php include ('../layouts/footer.php'); ?>