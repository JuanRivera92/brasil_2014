<?php
	class RevistaController extends Revista{
		
		public $muestra_errores = false;
		function __construct(){
			// parent::Revista();
		}
				
		public function insertaRevista($datos, $archivos){
			echo "<pre>datos: ";
			print_r($datos);
			print_r($archivos);
			echo "</pre>";
			
			$revista = new Revista();
			
			$revista->set_nombre($datos['nombre']);
			$revista->set_portada($archivos['portada']);
			$revista->set_fecha_creacion($datos['fecha_creacion']);
			$revista->set_volumen($datos['volumen']);
			$revista->set_titulo($datos['titulo']);
			$revista->set_subtitulo($datos['subtitulo']);
			$revista->set_numero($datos['numero']);
			$revista->set_clave($datos['clave']);
			$revista->set_directorio($datos['directorio']);
			$revista->set_editorial($datos['editorial']);
			
			if(count($revista->errores)>0){
				print_r($revista->errores);
				$revista->inserta($revista->get_atributos());
			}
			else{
				move_uploaded_file($archivos['portada']['tmp_name'],"../img/".$archivos['portada']['name']);
			}
			
			//$revista->inserta($revista->get_atributos());
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