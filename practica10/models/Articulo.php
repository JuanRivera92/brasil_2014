<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'resumen'=>array(),
		'introduccion'=>array(),
		'metodologia'=>array(),
        'contenido'=>array(),
		'fecha_creacion'=>array(),
		'archivo_pdf'=>array(),
		'id_status'=>array(),
		'conclusiones'=>array(),
		'agradecimientos'=>array(),
		'referencias'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
	private $introduccion;
	private $metodologia;
    private $contenido;
    private $fecha_creacion;
	private $archivo_pdf;
	private $id_status;
    private $conclusiones;
    private $agradecimientos;
	private $referencias;
       
    
    function Articulo(){
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
	
	//Inicio de id_articulo
    public function get_id_revista(){
        return $this->id_articulo;
    }

    public function set_id_articulo($valor){
        $er = new Er();
        
        if ( !$er->valida_id_articulo($valor) ){
            $this->errores[] = "Este id de articulo (".$valor.") no es valido";
        }
            $this->id_articulo = trim($valor);
        }//Fin de id_articulo
	
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
	
	//Inicio de resumen  
    public function get_resumen(){
        return $this->resumen;
    }

    public function set_resumen($valor){
        $er = new Er();
        
        if ( !$er->valida_resumen($valor) ){
            $this->errores[] = "Este resumen (".$valor.") no es valido";
        }
            $this->resumen = trim($valor);
        }//Fin de resumen
		
	//Inicio introduccion
    public function get_introduccion(){
        return $this->introduccion;
    }

    public function set_introduccion($valor){
        $er = new Er();
        
        if ( !$er->valida_introduccion($valor) ){
            $this->errores[] = "Esta introduccion (".$valor.") no es valida";
        }
            $this->introduccion = trim($valor);
        }//Fin de introduccion
		
		//Inicio metodologia
    public function get_metodologia(){
        return $this->metodologia;
    }

    public function set_metodologia($valor){
        $er = new Er();
        
        if ( !$er->valida_metodologia($valor) ){
            $this->errores[] = "Esta metodologia (".$valor.") no es valido";
        }
            $this->metodologia = trim($valor);
        }//Fin de metodologia
		
	//Inicio contenido
    public function get_contenido(){
        return $this->contenido;
    }

    public function set_contenido($valor){
        $er = new Er();
        
        if ( !$er->valida_contenido($valor) ){
            $this->errores[] = "Este contenido (".$valor.") no es valido";
        }
            $this->contenido = trim($valor);
        }//Fin de contenido
		
	//Inicio fecha_creacion
    public function get_fecha_creacion(){
        return $this->fecha_creacion;
    }

    public function set_fecha_creacion($valor){
        $er = new Er();
        
        if ( !$er->valida_fecha_creacion($valor) ){
            $this->errores[] = "Esta fecha_creacion (".$valor.") no es valido";
        }
            $this->fecha_creacion = trim($valor);
        }//Fin de fecha_creacion
		
	//Inicio de pdf  
    public function get_archivo_pdf(){
        return $this->archivo_pdf;
    }

    public function set_archivo_pdf($valor){
        $er = new Er();
        
        if ( !$er->valida_archivo_pdf($valor['name']) ){
            $this->errores[] = "Este pdf (".$valor['name'].") no es valido";
        }
            $this->archivo_pdf = trim($valor['name']);
        }//Fin de pdf
		
	//Inicio id_status
    public function get_id_status(){
        return $this->id_status;
    }

    public function set_id_status($valor){
        $er = new Er();
        
        if ( !$er->valida_id_status($valor) ){
            $this->errores[] = "Este id status (".$valor.") no es valido";
        }
            $this->id_status = trim($valor);
        }//Fin de id_status
		
	//Inicio conclusiones
    public function get_conclusiones(){
        return $this->conclusiones;
    }

    public function set_conclusiones($valor){
        $er = new Er();
        
        if ( !$er->valida_conclusiones($valor) ){
            $this->errores[] = "Este conclusiones (".$valor.") no es valido";
        }
            $this->conclusiones = trim($valor);
        }//Fin de conclusiones
		
	//Inicio agradecimientos
    public function get_agradecimientos(){
        return $this->agradecimientos;
    }

    public function set_agradecimientos($valor){
        $er = new Er();
        
        if ( !$er->valida_agradecimientos($valor) ){
            $this->errores[] = "Este agradecimientos (".$valor.") no es valido";
        }
            $this->agradecimientos = trim($valor);
        }//Fin de agradecimientos
		
	//Inicio referencias
    public function get_referencias(){
        return $this->referencias;
    }

    public function set_referencias($valor){
        $er = new Er();
        
        if ( !$er->valida_referencias($valor) ){
            $this->errores[] = "Este referencias (".$valor.") no es valido";
        }
            $this->referencias = trim($valor);
        }//Fin de referencias
		
}//Fin de clase Articulo

?>
