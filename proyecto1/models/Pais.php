<?phpclass Pais extends Modelo{    public $nombre_tabla = 'pais';    public $pk = 'idpais';            public $atributos = array(        'idpais'=>array(),		'nombre'=>array(),		'bandera'=>array(),		'idcontinente'=>array(),    );        public $errores = array( );        private $idpais;	private $nombre;	private $bandera;	private $idcontinente;               function Pais(){        parent::Modelo();    }			//Inicio de id pais    public function get_idpais(){        return $this->idpais;    }     public function set_idpais($valor){        $er = new Er();                if ( !$er->valida_idpais($valor) ){            $this->errores[] = "Esta idpais (".$valor.") no es valido";        }            $this->idpais = trim($valor);    }//Fin de id pais		//Inicio de nombre    public function get_nombre(){        return $this->nombre;    }     public function set_nombre($valor){        $er = new Er();                if ( !$er->valida_nombre($valor) ){            $this->errores[] = "Esta nombre (".$valor.") no es valido";        }            $this->nombre = trim($valor);    }//Fin de nombre		//Inicio de bandera    public function get_bandera(){        return $this->bandera;    }     public function set_bandera($valor){        $er = new Er();                if ( !$er->valida_bandera($valor) ){            $this->errores[] = "Esta bandera (".$valor.") no es valido";        }            $this->bandera = trim($valor);    }//Fin de bandera		//Inicio de idcontinente    public function get_idcontinente(){        return $this->idcontinente;    }     public function set_idcontinente($valor){        $er = new Er();                if ( !$er->valida_idcontinente($valor) ){            $this->errores[] = "Esta id de continente (".$valor.") no es valido";        }            $this->idcontinente = trim($valor);    }//Fin de id_continente	    }//Fin de clase Pais?>