<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Pais();
		}
		
		public function insertaPais($datos, $archivos){

			// $pais = new Pais();
			
			$this->set_nombre($datos['nombre']);
			$this->set_bandera($archivos['bandera']);
			$this->set_idcontinente($datos['idcontinente']);
			
			if(count($this->errores)>0){
				//print_r($this->errores);
				$this->muestra_errores = true;
			}
			else{
			$this->inserta($this->get_atributos());
				move_uploaded_file($archivos['bandera']['tmp_name'],"../img/".$archivos['bandera']['name']);
			}
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