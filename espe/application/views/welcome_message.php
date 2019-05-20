<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	<title>Signin Template · Bootstrap</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>public/js/parametros.js"  ></script>
	<script src="<?php echo base_url() ?>public/js/loginView.js"  ></script>
	

	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: auto;
		}

		.form-signin .checkbox {
			font-weight: 400;
		}

		.form-signin .form-control {
			position: relative;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}

		.form-signin .form-control:focus {
			z-index: 2;
		}

		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}

		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}


		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<!--<link href="signin.css" rel="stylesheet">-->
</head>

<body class="text-center">
	<form class="form-signin">
		<img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">IRISO</h1>
		<img style="margin-bottom: 15px" src="<?php echo base_url() ?>public/img/logo_espe.png" width="80%">

		<label for="inputEmail" class="sr-only">usuario</label>
		<input type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus/>
		
		<label for="inputPassword" class="sr-only">clave</label>
		<input type="password" id="clave" class="form-control" placeholder="Clave" required/>
		<input type="hidden" value="<?php echo base_url() ?>" id="base_url"/>

		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Recuerdame
			</label>
		</div>
		<button onclick="login()" class="btn btn-lg btn-primary btn-block" type="button">ingresar</button>
		<p class="mt-5 mb-3 text-muted">&copy; Espe - 2019</p>
	</form>
</body>

</html>