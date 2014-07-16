<?php

class Status extends Modelo{
    public $nombre_tabla = 'status';
    public $pk = 'id_status';
    
    
    public $atributos = array(
		'id_status'=>array(),
        'status'=>array(),
    );
    
    public $errores = array( );
    
	private $id_status;
    private $status;       
    
    function Status(){
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
	
	//Inicio de id_status
    public function get_id_status(){
        return $this->id_status;
    }

    public function set_id_status($valor){
        $er = new Er();
        
        if ( !$er->valida_id_status($valor) ){
            $this->errores[] = "Este id de status (".$valor.") no es valido";
        }
            $this->id_status = trim($valor);
        }//Fin de id_status
	
	//Inicio de status
    public function get_status(){
        return $this->status;
    } 

    public function set_status($valor){
        $er = new Er();
        
        if ( !$er->valida_status($valor) ){
            $this->errores[] = "Este status (".$valor.") no es valido";
        }
            $this->status = trim($valor);
    }
	//Fin de status
}//Fin de clase Status

?>
