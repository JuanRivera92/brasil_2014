<?php

class Revista extends Modelo{
    public $nombre_tabla = 'revista';
    public $pk = 'id_revista';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'portada'=>array(),
		'fecha'=>array(),
		'volumen'=>array(),
        'titulo'=>array(),
		'subtitulo'=>array(),
		'numero'=>array(),
        'clave'=>array(),
		'directorio'=>array(),
		'editorial'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $portada;
	private $fecha;
	private $volumen;
    private $titulo;
    private $subtitulo;
	private $numero;
	private $clave;
    private $directorio;
    private $editorial;
       
    
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
	
	//Inicio de portada  
    public function get_portada(){
        return $this->portada;
    }

    public function set_portada($valor){
        $er = new Er();
        
        if ( !$er->valida_portada($valor['name']) ){
            $this->errores[] = "Esta portada (".$valor['name'].") no es valido";
        }
            $this->portada = trim($valor['name']);
        }//Fin de portada
		
	//Inicio fecha
    public function get_fecha(){
        return $this->fecha;
    }

    public function set_fecha($valor){
        $er = new Er();
        
        if ( !$er->valida_fecha($valor) ){
            $this->errores[] = "Esta fecha (".$valor.") no es valida";
        }
            $this->fecha = trim($valor);
        }//Fin de fecha
		
		//Inicio volumen
    public function get_volumen(){
        return $this->volumen;
    }

    public function set_volumen($valor){
        $er = new Er();
        
        if ( !$er->valida_volumen($valor) ){
            $this->errores[] = "Este volumen (".$valor.") no es valido";
        }
            $this->volumen = trim($valor);
        }//Fin de volumen
		
	//Inicio titulo
    public function get_titulo(){
        return $this->titulo;
    }

    public function set_titulo($valor){
        $er = new Er();
        
        if ( !$er->valida_titulo($valor) ){
            $this->errores[] = "Este titulo (".$valor.") no es valido";
        }
            $this->titulo = trim($valor);
        }//Fin de titulo
		
	//Inicio subtitulo
    public function get_subtitulo(){
        return $this->subtitulo;
    }

    public function set_subtitulo($valor){
        $er = new Er();
        
        if ( !$er->valida_subtitulo($valor) ){
            $this->errores[] = "Este subtitulo (".$valor.") no es valido";
        }
            $this->subtitulo = trim($valor);
        }//Fin de subtitulo
		
	//Inicio numero
    public function get_numero(){
        return $this->numero;
    }

    public function set_numero($valor){
        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }
            $this->numero = trim($valor);
        }//Fin de numero
		
	//Inicio clave
    public function get_clave(){
        return $this->clave;
    }

    public function set_clave($valor){
        $er = new Er();
        
        if ( !$er->valida_clave($valor) ){
            $this->errores[] = "Este clave (".$valor.") no es valido";
        }
            $this->clave = trim($valor);
        }//Fin de clave
		
	//Inicio directorio
    public function get_directorio(){
        return $this->directorio;
    }

    public function set_directorio($valor){
        $er = new Er();
        
        if ( !$er->valida_directorio($valor) ){
            $this->errores[] = "Este directorio (".$valor.") no es valido";
        }
            $this->directorio = trim($valor);
        }//Fin de directorio
		
	//Inicio editorial
    public function get_editorial(){
        return $this->editorial;
    }

    public function set_editorial($valor){
        $er = new Er();
        
        if ( !$er->valida_editorial($valor) ){
            $this->errores[] = "Este editorial (".$valor.") no es valido";
        }
            $this->editorial = trim($valor);
        }//Fin de editorial
}//Fin de clase Revista

?>
