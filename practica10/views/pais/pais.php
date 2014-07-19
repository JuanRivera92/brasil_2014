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
	
	$paisC = new PaisController();
	if(isset($_POST['nombre'])){
		$paisC->insertaPais($_POST, $_FILES);
	}
?>	

<div class=row>
	<div class="col-md-6" id="Formulariopais">
	
		<!-- CONVERTIR EN FUNCION Y HUBICARLO EN UNA CLASE -->
		<?php
		 if($paisC->muestra_errores){
		 ?>
		 	<div class="alert alert-danger">
				<?php
					foreach ($paisC->errores as $value) {
						echo "<p>$value</p>";
					}
				?>
			</div>
		 <?php
			}
		?>
		<!-- CONVERTIR EN FUNCION Y HUBICARLO EN UNA CLASE -->
		
	
	
			<form role="form" id="pais" action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombre">Nombre: </label>
				<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $paisC->get_nombre();?>">
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