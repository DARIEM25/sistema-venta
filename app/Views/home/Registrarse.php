<!doctype html>
<html lang="en">
  <head>
  	<title>Trajes Inicio Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url();?>public/Login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url();?>public/Imagenes/Fondo.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registro</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">*TRAJES CHUMBIVILCAS*</h3>
		      	<form action="<?= base_url('registrar/usuario') ?>" method="post" class="signin-form">
                    <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Nombre" name="nombre"required>
		      		</div>
                      <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="Correo Electronico" name="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Registrarse</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="<?php echo base_url('Iniciar_Sesion'); ?>" style="color: #fff">Iniciar Sesión</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; O inicia sesión con &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url();?>public/Login/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>public/Login/js/popper.js"></script>
  <script src="<?php echo base_url();?>public/Login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>public/Login/js/main.js"></script>

	</body>
</html>

