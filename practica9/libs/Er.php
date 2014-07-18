<?php

class Er {

	//status
	public function valida_status($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//nombre
	public function valida_nombre($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//Apellido
    public function valida_apellidos($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

    //E-mail
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//portada
	public function valida_portada($valor){
	$exp_reg = '/^[a-zA-Z0-9]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//fecha ($fecha="2/03/2011";)
	public function valida_fecha($valor){
	$exp_reg = '/^[a-zA-Z0-9]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//volumen
	public function valida_volumen($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	
	//titulo
	public function valida_titulo($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	//subtitulo
	public function valida_subtitulo($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//numero de 1 a 11 digitos
	public function valida_numero($valor){
	$exp_reg = '/^[0-9]{1,11}$/i';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//clave de 4 a 45 digitos
	public function valida_clave($valor){
	$exp_reg = '/^[0-9]{4,45}$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//directorio
	public function valida_directorio($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//editorial
	public function valida_editorial($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		
	//resumen
	public function valida_resumen($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//introduccion
	public function valida_introduccion($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//metodologia
	public function valida_metodologia($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//contenido
	public function valida_contenido($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//fecha ($fecha="2/03/2011";)
	public function valida_fecha_creacion($valor){
	$patron = "/-/";
	$remplazo = "/";
	$exp_reg = '/^\d{4}\/\d{1,2}\/\d{1,2}$/';
	$valor = preg_replace ($patron, $remplazo, $valor);
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//Archivo PDF
	public function valida_archivo_pdf($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//conclusiones
	public function valida_conclusiones($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//agradecimiento
	public function valida_agradecimientos($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//referencias
	public function valida_referencias($valor){
	$exp_reg = '/^[a-zA-Z0-9, ]*$/';
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
	
	//pais
	public function valida_pais($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//bandera
	public function valida_bandera($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//idcontinente
	public function valida_idcontinente($valor){
	$exp_reg = '/^[1-2]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//idpais
	public function valida_idpais($valor){
	$exp_reg = '/^[1-9]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//escudo
	public function valida_escudo($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
		//id_status de 1 a 11 digitos
	public function valida_id_status($valor){
	$exp_reg = '/^[0-9]{1,11}$/i';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
}
?>    