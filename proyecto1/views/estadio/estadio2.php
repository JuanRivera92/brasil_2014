<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Estadio.php');
    include ('../../controllers/EstadioController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['Nombre'])){
		$estadioC = new EstadioController();
		$estadioC->insertaEstadio($_POST);
	}
?>
			<div class="row">
				<div class="col-md-6">
					<form role="form" action="" method="POST">
					  <div class="form-group" id="formulario2">
						<label for="Nombre">Nombre: </label>
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="">
					  </div>
					  <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>	
<?php include ('../layouts/footer.php'); ?>
