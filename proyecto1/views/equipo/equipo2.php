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
  
  if(isset($_POST['nombre'])){
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	}
?>
       <div class="row">
        <div class="col-md-6">
          <form role="form" id="equipo" action="" method="POST">
               <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter name">
                </div>
                <label for="exampleInputEmail1">Pais: </label>
                  <select name="linea">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select>
              <div class="form-group">
                  <label for="escudo">Escudo:</label>
                  <input type="file" id="escudo">
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        </div>
      </div>
<?php include ('../layouts/footer.php'); ?>