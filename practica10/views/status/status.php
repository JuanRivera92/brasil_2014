<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Status.php');
    include ('../../controllers/StatusController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['status'])){
		$statusC = new StatusController();
		$statusC->insertaStatus($_POST);
	}
?>	
	
	<div class="row">
		<div class="col-md-6" id="Formulariostatus">
			<form role="form" id="autor" action="" method="POST">
				<div class="form-group">
					<label for="status">Status:</label>
					<input type="text" class="form-control" id="status" name="status">
				</div>	
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div><!--FIN CLASS ROW-->
	
<?php include ('../layouts/footer.php'); ?>