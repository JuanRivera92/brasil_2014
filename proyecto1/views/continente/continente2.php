<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Continente.php');
    include ('../../controllers/ContinenteController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['nombre'])){
		$continenteC = new ContinenteController();
		$continenteC->insertaContinente($_POST);
	}
?>	

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