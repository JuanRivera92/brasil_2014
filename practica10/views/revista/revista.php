<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Revista.php');
    include ('../../controllers/RevistaController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
	
	if(isset($_POST['nombre'])&['portada']){
		$revistaC = new RevistaController();
		$revistaC->insertaRevista($_POST, $_FILES);
	}
?>	
	
	<div class="row">
		<div class="col-md-6" id="Formulariorevista">
			<form role="form" id="autor" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nombre">Nombre: </label>
					<input type="text" class="form-control" id="nombre" name="nombre" />
				</div>
				<div class="form-group">
					<label for="portada">Portada: </label>
					<input type="file" id="portada" name="portada"/>
				</div>
				<div>
					<label for="fecha">Fecha:</label>
					<input id="fecha" name="fecha" type="date" class="form-control" data-format="dd-MM-yyyy"></input>
				</div>
				<div class="form-group">
					<label for="volumen">Volumen:</label>
					<textarea type="text" class="form-control" id="volumen" name="volumen"></textarea>
				</div>
				<div class="form-group">
					<label for="titulo">Titulo:</label>
					<input type="text" class="form-control" id="titulo" name="titulo">
				</div>
				<div class="form-group">
					<label for="subtitulo">Subtitulo:</label>
					<input type="text" class="form-control" id="subtitulo" name="subtitulo">
				</div>
				<div class="form-group">
					<label for="numero">Numero :</label>
					<input type="text" class="form-control" id="numero" name="numero">
				</div>
				<div class="form-group">
					<label for="clave">Clave:</label>
					<textarea type="text" class="form-control" id="clave" name="clave"></textarea>
				</div>
				<div class="form-group">
					<label for="directorio">Directorio:</label>
					<textarea type="text" class="form-control" id="directorio" name="directorio"></textarea>
				</div>
				<div class="form-group">
					<label for="editorial">Editorial:</label>
					<textarea type="text" class="form-control" id="editorial" name="editorial"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>			
		</div>
	</div><!--FIN CLASS ROW-->
	
<?php include ('../layouts/footer.php'); ?>