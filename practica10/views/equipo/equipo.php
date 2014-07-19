<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Equipo.php');
    include ('../../controllers/EquipoController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	include ('../../libs/Fun.php');
	
	$funciones = new FunErrores();
	
	$equipoC = new EquipoController();
	if(isset($_POST['nombre'])){
		$equipoC->insertaEquipo($_POST, $_FILES);
	}
?>	

<div class=row>
	<div class="col-md-6" id="Formularioequipo">
	
			<form role="form" id="equipo" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nombre">Nombre: </label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre();?>" placeholder="Nombre del equipo">
				</div>
				<div class="form-group">
					<label for="idpais">Id Pais: </label>
					<input type="texy" class="form-control" id="idpais" name="idpais">
				</div>
				<div class="form-group">
					<label for="escudo">Escudo: </label>
					<input type="file" id="escudo" name="escudo">
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
	</div>
</div>
<?php include ('../layouts/footer.php'); ?>