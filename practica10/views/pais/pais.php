<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Pais.php');
    include ('../../controllers/PaisController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['nombre'])){
		$paisC = new PaisController();
		$paisC->insertaPais($_POST, $_FILES);
	}
?>	

<div class=row>
	<div class="col-md-6" id="Formulariopais">
		<form role="form" id="pais" action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombre">Nombre: </label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Por ejemplo: M&eacute;xico">
			</div>
			<div class="form-group">
				<label for="bandera">Bandera: </label>
				<input type="file" id="bandera" name="bandera">
			</div>
			<div class="form-group">
				<label for="idcontinente">Continente: </label>
				<input type="num" class="form-control" id="idcontinente" name="idcontinente">
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div>
</div>
<?php include ('../layouts/footer.php'); ?>