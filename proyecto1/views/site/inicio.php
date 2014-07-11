<?php 
  session_start();
  include ('../layouts/header.php');
?>
<br/>
	<div class=row>	
		<div class="col-md-12">
		  <div class="page-header">
			<h1>Datepiker</h1>
		  </div>
		  <div class='input-group date' id='datetimepicker1'>
			<input type='text' class="form-control" />
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
			</span>
		  </div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>FancyBox</h1>
					<p>
						<button type="button" class="btn btn-success">
						<a class="fancybox fancybox.iframe" href="revista.html">Formulario</a>
						</button>	
					</p>
			</div>
			
		</div>
	</div>
	<div class="row">
			<div class="col-md-6">
					<form id="formulario1">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" id="nombre" name="nombre" />
						</div>
						<div>
							<label for="portada">Portada: </label>
							<input type="file" id="portada" name="portada">
						</div>
						<br/>
						<div class="input-group date" id="datetimepicker2">
							<input type='text' class="form-control" />
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
						<div class="form-group">
							<label for="volumen">Volumen</label>
							<input type="text" class="form-control" id="volumen" name="volumen" />
						</div>
						<div class="form-group">
							<label for="titulo">Titulo</label>
							<input type="text" class="form-control" id="titulo" name="titulo" />
						</div>
						<div class="form-group">
							<label for="subtitulo">Subtitulo</label>
							<input type="text" class="form-control" id="subtitulo" name="subtitulo" />
						</div>
						<div class="form-group">
							<label for="numero">Numero</label>
							<input type="text" class="form-control" id="numero" name="numero" />
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
					</form>
			</div>
	</div>
<?php include ('../layouts/footer.php'); ?>
