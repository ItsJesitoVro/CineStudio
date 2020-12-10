<!DOCTYPE html>
<html lang="es">
<head>
	<title>CineStudio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="#">
	<meta name="viewport" content="width=device-width,-initial=scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/maincss.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid" style="background-color:#b80a4e;">
	<div class="row">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="#"><img src="<?php echo base_url();?>/assets/img/logo.png" class="img-fluid" alt="ironman" width="100"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		  
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
				  <a class="nav-link" href="<?php echo base_url();?>/index.php/Usuario/index">Inicio<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?php echo base_url();?>/index.php/Usuario/denegado">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>/index.php/Usuario/categoria">Categorías</a>
				<li class="nav-item">
				  <a class="nav-link" href="<?php echo base_url();?>/index.php/Usuario/contacto">Contacto</a>	
				<!-- <li class="nav-item">
				  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li> -->
			  </ul>
			  <form class="form-inline my-2 my-lg-0">
				<a title="login" href="<?php echo base_url();?>/index.php/Usuario/login"><img src="<?php echo base_url();?>/assets/img/login.png" class="img-fluid" alt="login" width="60"></a>
			  </form>
			</div>
		  </nav>
	</header>