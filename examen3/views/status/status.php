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
				<div>
				     <label for="id_status">ID status:</label>
						<select name="id_status">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<input type="text" class="form-control" id="status" name="status">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div><!--FIN CLASS ROW-->
	
<?php include ('../layouts/footer.php'); ?>