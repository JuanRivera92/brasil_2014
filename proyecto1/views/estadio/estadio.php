<?php   session_start();  include ('../layouts/header.php');?><?phpclass estadio extends Modelo{	public $Nombre_tabla = 'estadio';    public $pk = 'id_estadio';            public $atributos = array(        'Nombre'=>array(),    );        public $errores = array( );        private $Nombre;               function estadio(){        parent::Modelo();    }        public function get_atributos(){        $rs = array();        foreach ($this->atributos as $key => $value) {            $rs[$key]=$this->$key;        }        return $rs;    }            public function get_Nombre(){        return $this->sube;    }     public function set_Nombre($valor){        $er = new Er();                if ( !$er->valida_Nombre($valor) ){            $this->errores[] = "Este Nombre (".$valor.") no es valido";        }        $rs = $this->consulta_sql("select * from usuarios where Nombre = '$valor'");        $rows = $rs->GetArray();                if(count($rows) > 0){            $this->errores[] = "Este Nombre (".$valor.") ya esta registrado";         }else{            $this->Nombre = trim($valor);        }    }}?><?php include ('../layouts/footer.php'); ?>