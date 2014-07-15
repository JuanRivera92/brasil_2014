<?php

class Er {
    //E-mail
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//nombre
	public function valida_nombre($valor){
	$exp_reg = '/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	
	//Apellido
	public function valida_Apellido($valor){
	$exp_reg = '/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	
	//escudo
	public function valida_escudo($valor){
	$exp_reg = '/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//Edad
	public function valida_Edad($valor){
	$exp_reg = '/^(?:\+|-)?\d+$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//id_equipo (RESTRINGIR A CANTIDAD DE NUMEROS
	public function valida_idequipo($valor){
	$exp_reg = '/^(?:\+|-)?\d+$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//id_estadio (RESTRINGIR A CANTIDAD DE NUMEROS
	public function valida_idestadio($valor){
	$exp_reg = '/^(?:\+|-)?\d+$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//id_pais (RESTRINGIR A CANTIDAD DE NUMEROS
	public function valida_idpais($valor){
	$exp_reg = '/^(?:\+|-)?\d+$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//id_integrante (RESTRINGIR A CANTIDAD DE NUMEROS
	public function valida_idintegrante($valor){
	$exp_reg = '/^(?:\+|-)?\d+$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//id_continente (RESTRINGIR A CANTIDAD DE NUMEROS
	public function valida_idcontinente($valor){
	$exp_reg = '/^(?:\+|-)?\d+$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//id_ciudad (RESTRINGIR A CANTIDAD DE NUMEROS
	public function valida_idciudad($valor){
	$exp_reg = '/^(?:\+|-)?\d+$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//peso
	public function valida_peso($valor){
	$exp_reg = '/^[0-9]+(\.[0-9]+)?$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//fecha ($fecha="2/03/2011";)
	public function valida_fecha($valor){
	$exp_reg = '/^(\d\d\/\d\d\/\d\d\d\d){1,1}$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//Usuario de 4 a 28 digitos
	public function valida_usuario($valor){
	$exp_reg = '/^[a-z\d_]{4,28}$/i';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//codigo postal
	public function valida_codigopostal($valor){
	$exp_reg = '/^[0-9]{6,6}?$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//Colores hexadecimales
	public function valida_colorhexa($valor){
	$exp_reg = '/^#(?:(?:[a-f\d]{3}){1,2})$/i';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//Buscar comentarios multilinea
	public function valida_comentmult($valor){
	$exp_reg = '/^[(/*)+.+(*/)]$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//RFC
	public function valida_rfc($valor){
	$exp_reg = '/^[A-Z]{3,4}[ \-]?[0-9]{2}((0{1}[1-9]{1})|(1{1}[0-2]{1}))((0{1}[1-9]{1})|([1-2]{1}[0-9]{1})|(3{1}[0-1]{1}))[ \-]?[A-Z0-9]{3}$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
}
?>    