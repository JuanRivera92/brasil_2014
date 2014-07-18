<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'idintegrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
		'peso'=>array(),
		'estatura'=>array(),
		'foto'=>array(),
		'edad'=>array(),

    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
	private $peso;
	private $estatura;
	private $foto;
	private $edad;

    function Integrante(){
        parent::Modelo();
    }
    
	//Inicio get atributos
	public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
	
	//Inicio de nombre
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){
        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este Nombre (".$valor.") no es valido";
        }
            $this->nombre = trim($valor);
    }
	//Fin de nombre
	
	//Inicio de apellido
    public function get_apellido(){
        return $this->apellido;
    } 

    public function set_apellido($valor){
        $er = new Er();
        
        if ( !$er->valida_apellido($valor) ){
            $this->errores[] = "Este apellido (".$valor.") no es valido";
        }
            $this->apellido = trim($valor);
    }
	//Fin de apellido
	
		//Inicio de peso
    public function get_peso(){
        return $this->peso;
    } 

    public function set_peso($valor){
        $er = new Er();
        
        if ( !$er->valida_peso($valor) ){
            $this->errores[] = "Este peso (".$valor.") no es valido";
        }
            $this->peso = trim($valor);
    }
	//Fin de peso
	
		//Inicio de estatura
    public function get_estatura(){
        return $this->estatura;
    } 

    public function set_estatura($valor){
        $er = new Er();
        
        if ( !$er->valida_estatura($valor) ){
            $this->errores[] = "Este estatura (".$valor.") no es valido";
        }
            $this->estatura = trim($valor);
    }
	//Fin de estatura
	
	
	//Inicio de foto  
    public function get_foto(){
        return $this->foto;
    }

    public function set_foto($valor){
        $er = new Er();
        
        if ( !$er->valida_foto($valor['name']) ){
            $this->errores[] = "Este foto (".$valor.") no es valido";
        }
            $this->foto = trim($valor['name']);
        }//Fin de foto
		
	//Inicio de edad  
    public function get_edad(){
        return $this->edad;
    }

    public function set_edad($valor){
        $er = new Er();
        
        if ( !$er->valida_edad($valor) ){
            $this->errores[] = "Este edad (".$valor.") no es valido";
        }
            $this->edad = trim($valor);
        }//Fin de edad
		
}//Fin de clase Equipo

?>
