<?php 
  define('BASEURL','http://localhost:8080/brasil_2014/practica9');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Clase programación web verano</title>
	
	<!-- Librerias -->
	
			<!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
	<link href="../css/micss.css" rel="stylesheet">	
			
			<!-- Fancybox -->
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" />

	<!-- Fin de Librerias -->

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Programación Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo BASEURL; ?>/views/site/inicio2.php">Inicio</a></li>
            <li><a href="<?php echo BASEURL; ?>/views/autor/autor.php">Autor</a></li>
			<li><a href="<?php echo BASEURL; ?>/views/revista/revista.php">Revista</a></li>
			<li><a href="<?php echo BASEURL; ?>/views/articulo/articulo.php">Articulo</a></li>
			<li><a href="<?php echo BASEURL; ?>/views/status/status.php">Status</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">opciones  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">op1</a></li>
                <li class="divider"></li>
                <li><a href="">op2</a></li>
              </ul>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container theme-showcase" role="main">

