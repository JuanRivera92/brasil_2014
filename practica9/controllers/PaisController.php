<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			// parent::Pais();
		}
		
		public function insertaPais($datos, $archivos){
			echo "<pre>datos: ";
			print_r($datos);
			print_r($archivos);
			echo "</pre>";
			$pais = new Pais();
			$pais->set_nombre($datos['nombre']);
			$pais->set_bandera($archivos['bandera']);
			$pais->set_idcontinente($datos['idcontinente']);
			
			if(count($pais->errores)>0){
				print_r($pais->errores);
			}
			$pais->inserta($pais->get_atributos());
				move_uploaded_file($archivos['bandera']['tmp_name'],"../img/".$archivos['bandera']['name']);
			
			die();
		}
		
		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}
			
		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>