<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Articulo.php');
    include ('../../controllers/ArticuloController.php');
    include ('../../libs/Er.php');
	include ('../../libs/Fun.php');
	
	include ('../layouts/header.php');
	
	$funciones = new FunErrores();
	
	$articuloC = new ArticuloController();
	if(isset($_POST['nombre'])){
		$articuloC->insertaArticulo($_POST, $_FILES);
	}
?>	
	<div class="row">
		<div class="col-md-6" id="Formularioarticulo">
		
			<form role="form" id="autor" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nombre">Nombre: </label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $articuloC->get_nombre();?>" />
				</div>
				<div class="form-group">
					<label for="resumen">Resumen: </label>
					<input type="text" class="form-control" id="resumen" name="resumen" value="<?php echo $articuloC->get_resumen();?>"/>
				</div>
				<div class="form-group">
					<label for="introduccion">Introduccion:</label>
					<input type="text" class="form-control" id="introduccion" name="introduccion" value="<?php echo $articuloC->get_introduccion();?>"/>
				</div>
				<div class="form-group">
					<label for="metodologia">Metodologia:</label>
					<input type="text" class="form-control" id="metodologia" name="metodologia" value="<?php echo $articuloC->get_metodologia();?>"/>
				</div>
				<div class="form-group">
					<label for="contenido">Contenido:</label>
					<input type="text" class="form-control" id="contenido" name="contenido" value="<?php echo $articuloC->get_contenido();?>"/>
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
					<input type="text" class="form-control" id="conclusiones" name="conclusiones" value="<?php echo $articuloC->get_conclusiones();?>"/>
				</div>
				<div class="form-group">
					<label for="agradecimientos">Agradecimientos:</label>
					<input type="text" class="form-control" id="agradecimientos" name="agradecimientos" value="<?php echo $articuloC->get_agradecimientos();?>"/>
				</div>
				<div class="form-group">
					<label for="referencias">Referencias:</label>
					<input type="text" class="form-control" id="referencias" name="referencias" value="<?php echo $articuloC->get_referencias();?>"/>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>			
		</div>
	</div><!--FIN CLASS ROW-->
	
<?php include ('../layouts/footer.php'); ?>