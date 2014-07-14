<?php 
    session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Integrante.php');
    include ('../../controllers/IntegranteController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');
?>
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
				  <h2>Examen 2, 05 de Julio de 2014</h2>
				  <p>TEXTO</p>
				  <p><button id="boton" class="btn btn-primary">Mostrar Formularios</button></p>
				</div>
			</div>
		</div>
		<div class="container-fluid" >
			<div class="row" >
				<div class="col-md-6" >
					<h3 align="center">Integrante</h3>
					<div id="container" class="elemento1">
						<form>
							<div>
								<label for="nombre">Nombre: </label>
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
							</div>
							<div>
								<label for="apellido">Apellido: </label>
								<input type="text" class="form-control" id="apellido" name="apellido" placeholder="">
							</div>
							<div>
								<label for="peso">Peso: </label>
								<input type="text" class="form-control" id="peso" name="peso" placeholder="">
							</div>
							<div>
								<label for="estatura">Estatura: </label>
								<input type="text" class="form-control" id="estatura" name="estatura" placeholder="">
							</div>
							<div>
								<label for="foto">Foto: </label>
								<input type="file" id="foto" name="foto">
							</div>
							<div>
								<label for="edad">Edad: </label>
								<input type="text" class="form-control" id="edad" name="edad" placeholder="">
							</div>

						</form>	
						<div>
							<button id="boton2" class="btn btn-default">Entrenador</button>
							</div>
							<br/>
							<div>
							<p><button id="boton3" class="btn btn-primary">Jugador</button></p>
							</div>
					</div>
				</div>
				<h3 align="center">Tipo de Integrante</h3>
				<div class="col-md-3">
					<div id="container" class="elemento2">
						<form>
							<div >
								<label for="numero">Numero: </label>
								<input type="text" class="form-control" id="numero" name="numero" placeholder="">
							</div>
						</form>	
					</div>
				</div>
				<div class="col-md-3">
					<div id="container" class="elemento3">
						<form>
							<div >
								<label for="nombre">Nombre: </label>
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>	
	<script type="text/javascript">
	$(document).ready(function() {
			$(".elemento1").hide("slow");
			$(".elemento2").hide("slow");
			$(".elemento3").hide("slow");
			
		$("#boton").click(function(){	
			$(".elemento1").show("fats");	
					});
		$("#boton2").click(function(){
			$(".elemento3").hide("fats");
			$(".elemento2").show("fats");		
					});
		$("#boton3").click(function(){
			$(".elemento3").show("fats");		
					});
			});
	</script>	
<?php include ('../layouts/footer.php'); ?>