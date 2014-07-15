<?php
	class IntegranteController extends Integrante{
		
		public $muestra_errores = false;
		function __construct(){
			// parent::Pais();
		}
		
		public function insertaIntegrante($datos){
			echo "<pre>datos: ";
			print_r($datos);
			echo "</pre>";
			$integrante = new Integrante();
			$integrante->set_idintegrante($datos['idintegrante']);
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_peso($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($datos['foto']);
			$integrante->set_Edad($datos['Edad']);
			$integrante->set_idequipo($datos['idequipo']);
			
			
			if(count($continente->errores)>0){
				print_r($continente->errores);
			}
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