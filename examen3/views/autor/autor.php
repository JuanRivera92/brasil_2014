<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Autor.php');
    include ('../../controllers/AutorController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['nombre'])){
		$autorC = new AutorController();
		$autorC->insertaAutor($_POST);
	}
?>	
	
	<div class="row">
		<div class="col-md-6">
			<form role="form" id="autor" action="" method="POST">
				<div>
					<label for="nombre">Nombre:</label>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Autor">
				</div>
				<div>
					<label for="apellido">Apellido:</label>
					<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido del Autor">
				</div>
				<div>
					<label for="email">E-mail:</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="E-mail del Autor">
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div><!--FIN CLASS ROW-->
	
<?php include ('../layouts/footer.php'); ?>