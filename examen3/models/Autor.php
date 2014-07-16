<?php

class Autor extends Modelo{
    public $nombre_tabla = 'autor';
    public $pk = 'id_autor';
    
    
    public $atributos = array(
		'id_autor'=>array(),
        'nombre'=>array(),
        'apellidos'=>array(),
		'email'=>array(),
    );
    
    public $errores = array( );
    
	private $id_autor;
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
	
	//Inicio de id_autor
    public function get_id_autor(){
        return $this->id_autor;
    }

    public function set_id_autor($valor){
        $er = new Er();
        
        if ( !$er->valida_id_autor($valor) ){
            $this->errores[] = "Este id de autor (".$valor.") no es valido";
        }
            $this->id_autor = trim($valor);
        }//Fin de id_autor
	
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
