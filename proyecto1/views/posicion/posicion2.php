<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Posision.php');
    include ('../../controllers/PosisionController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['nombre'])){
		$posisionC = new PosisionController();
		$posisionC->insertaPosision($_POST);
	}
?>
			<div class="row">
				<div class="col-md-6">
					<form id="formulario4" role="form" action="" method="POST">
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