<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'idpais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'portada'=>array(),
		'idcontinente'=>array(),

    );
    
    public $errores = array( );
    
    private $nombre;
    private $portada;
	private $idcontinente;

    function Pais(){
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
	
	//Inicio de bandera  
    public function get_bandera(){
        return $this->bandera;
    }

    public function set_bandera($valor){
        $er = new Er();
        
        if ( !$er->valida_bandera($valor) ){
            $this->errores[] = "Este bandera (".$valor.") no es valido";
        }
            $this->bandera = trim($valor);
        }//Fin de bandera
		
		//Inicio de idcontinente  
    public function get_idcontinente (){
        return $this->idcontinente ;
    }

    public function set_idcontinente ($valor){
        $er = new Er();
        
        if ( !$er->valida_idcontinente ($valor) ){
            $this->errores[] = "Este idcontinente  (".$valor.") no es valido";
        }
            $this->idcontinente  = trim($valor);
        }//Fin de idcontinente 
		
}//Fin de clase pais

?>
