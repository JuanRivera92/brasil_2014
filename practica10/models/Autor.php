<?php

class Autor extends Modelo{
    public $nombre_tabla = 'autor';
    public $pk = 'id_autor';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellidos'=>array(),
		'email'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellidos;
	private $email;
       
    
    function Autor(){
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
	
	//Inicio de apellidos  
    public function get_apellidos(){
        return $this->apellidos;
    }

    public function set_apellidos($valor){
        $er = new Er();
        
        if ( !$er->valida_apellidos($valor) ){
            $this->errores[] = "Este apellido (".$valor.") no es valido";
        }
            $this->apellidos = trim($valor);
        }//Fin de apellidos
		
	//Inicio email
    public function get_email(){
        return $this->email;
    }

    public function set_email($valor){
        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este email (".$valor.") no es valido";
        }
            $this->email = trim($valor);
        }//Fin de email
}//Fin de clase Autor

?>
