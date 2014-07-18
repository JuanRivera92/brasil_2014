<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Articulo.php');
    include ('../../controllers/ArticuloController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['nombre'])){
		$articuloC = new ArticuloController();
		$articuloC->insertaArticulo($_POST, $_FILES);
	}
?>	
	
	<div class="row">
		<div class="col-md-6" id="Formularioarticulo">
			<form role="form" id="autor" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nombre">Nombre: </label>
					<input style="background-color:transparent; " type="text" class="form-control" id="nombre" name="nombre" />
				</div>
				<div class="form-group">
					<label for="resumen">Resumen: </label>
					<textarea type="text" class="form-control" id="resumen" name="resumen"></textarea>
				</div>
				<div class="form-group">
					<label for="introduccion">Introduccion:</label>
					<textarea type="text" class="form-control" id="introduccion" name="introduccion"></textarea>
				</div>
				<div class="form-group">
					<label for="metodologia">Metodologia:</label>
					<textarea type="text" class="form-control" id="metodologia" name="metodologia"></textarea>
				</div>
				<div class="form-group">
					<label for="contenido">Contenido:</label>
					<textarea type="text" class="form-control" id="contenido" name="contenido"></textarea>
				</div>
				<div>
					<label for="fecha_creacion">Fecha:</label>
					<input id="fecha_creacion" name="fecha_creacion" type="date" class="form-control" data-format="dd-MM-yyyy"></input>
				</div>
				<div class="form-group">
					<label for="archivo_pdf">Archivo PDF:</label>
					<input type="file" id="archivo_pdf" name="archivo_pdf">
				</div>
				<div class="form-group">
					<label for="id_status">ID Status:</label>
					<input type="text" class="form-control" id="id_status" name="id_status">
				</div>
				<div class="form-group">
					<label for="conclusiones">Conclusiones:</label>
					<textarea type="text" class="form-control" id="conclusiones" name="conclusiones"></textarea>
				</div>
				<div class="form-group">
					<label for="agradecimientos">Agradecimientos:</label>
					<textarea type="text" class="form-control" id="agradecimientos" name="agradecimientos"></textarea>
				</div>
				<div class="form-group">
					<label for="referencias">Referencias:</label>
					<textarea type="text" class="form-control" id="referencias" name="referencias"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>			
		</div>
	</div><!--FIN CLASS ROW-->
	
<?php include ('../layouts/footer.php'); ?>