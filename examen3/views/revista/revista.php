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
	
	if(isset($_POST['nombre'])){
		$revistaC = new RevistaController();
		$revistaC->insertaRevista($_POST);
	}
?>	
	
	<div class="row">
		<div class="col-md-6" id="Formulariorevista">
			<form role="form" id="autor" action="" method="POST">
				<div>
				     <label for="id_revista">ID Revista:</label>
						<select name="id_revista">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
				</div>
				<div>
					<label for="nombre">Nombre:</label>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la revista">
				</div>
				<div>
					<label for="portada">Portada:</label>
					<input type="file" id="portada" name="portada">
				</div>
				<div class='input-group date' id='datetimepicker1'>
					<label for="fecha">Fecha:</label>
					<input type="datetime" class="form-control" id="fecha" name="fecha" >
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							</span>
				</div>
				<div class="form-group">
					<label for="volumen">Volumen:</label>
					<input type="text" class="form-control" id="volumen" name="volumen">
				</div>
				<div class="form-group">
					<label for="titulo">Titulo:</label>
					<input type="text" class="form-control" id="titulo" name="titulo">
				</div>
				<div class="form-group">
					<label for="subtitulo">Subtitulo</label>
					<input type="text" class="form-control" id="subtitulo" name="subtitulo" />
				</div>
				<div class="form-group">
					<label for="numero">Numero</label>
					<input type="number" class="form-control" id="numero" name="numero" />
				</div>
				<div class="form-group">
					<label for="clave">Clave</label>
					<input type="text" class="form-control" id="clave" name="clave" />
				</div>
				<div class="form-group">
					<label for="directorio">Directorio</label>
					<textarea type="text" class="form-control" id="directorio" name="directorio"></textarea>
				</div>
				<div class="form-group">
					<label for="editorial">Editorial</label>
					<textarea type="text" class="form-control" id="editorial" name="editorial"></textarea>
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div><!--FIN CLASS ROW-->
	
<?php include ('../layouts/footer.php'); ?>