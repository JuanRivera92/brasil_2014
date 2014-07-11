<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'id_equipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_pais'=>array(),
		'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $id_pais;
	private $escudo;
       
    
    function Equipo(){
        parent::Modelo();
    }
    
    public function get_nombre(){
        $rs = array();
        foreach ($this->nombre as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->sube;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    }
}

?>
