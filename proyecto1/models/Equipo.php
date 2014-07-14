<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'idequipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'idpais'=>array(),
		'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $id_pais;
	private $escudo;
       
    
    function Equipo(){
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
        $rs = array();
        foreach ($this->nombre as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){
        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este Nombre (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    }
	//Fin de nombre
	//Inicio de id_pais
	public function get_idpais(){
        $rs = array();
        foreach ($this->idpais as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    public function get_idpais(){
        return $this->sube;
    }

    public function set_idpais($valor){
        $er = new Er();
        
        if ( !$er->valida_idpais($valor) ){
            $this->errores[] = "Este id del pais (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->idpais = trim($valor);
        }
    }
	//Fin de id_pais
	//Inicio escudo
	public function get_escudo(){
        $rs = array();
        foreach ($this->escudo as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    public function get_id_pais(){
        return $this->sube;
    }

    public function set_escudo($valor){
        $er = new Er();
        
        if ( !$er->valida_escudo($valor) ){
            $this->errores[] = "Este id del escudo (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->escudo = trim($valor);
        }
    }
	//Fin de escudo
}//Fin de clase Equipo

?>
