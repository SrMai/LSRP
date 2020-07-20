<?php
$NServer = 'Los Santos Internacional - Roleplay';
$NServer2 = 'Los Santos Internacional';
?>

<html>

<head>
	<title><?php echo "$NServer"; ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header">

			<!-- Inner -->
			<div class="inner">
				<header>
					<h1><a href="index.php" id="logo"><?php echo "$NServer2"; ?></a></h1>
					<hr />
					<p>Comenzar test para registrarse:</p>
				</header>
				<footer>
					<a href="#banner" class="button circled scrolly">Test</a>
				</footer>
			</div>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="foro/index.php">Foro</a></li>
					<li><a href="#">Iniciar sesión</a></li>
				</ul>
			</nav>

		</div>

		<!-- Banner -->
		<div class="container">
			<section id="banner">
				<header>
					<h2>Bienvenido al test de ingreso.</h2><br>
					<h3>Por favor responde las preguntas con sinceridad, este proceso es para que puedas ingresar al servidor.</h3><br>
					<!--Form registro-->
					<p>Por favor, llena estos datos para ingresar al servidor:</p>
					<form class="needs-validation" novalidate>
						<div class="form-row">
							<div class="col-md-4 mb-3">
								<label for="validationTooltip01">Nombre</label>
								<input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Nombre" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationTooltip02">Apellido</label>
								<input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Apellido" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationTooltipUsername">Username</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
									</div>
									<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
									<div class="invalid-tooltip">
										Por favor, ingrese un nombre de usuario valido.
									</div>
								</div>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Enviar</button>
					</form>
				</header>
			</section>
		</div>

		<!-- Footer -->
		<div class="container" style="background-color:black; width:100%; color:white;">
			<div class="row">
				<div class="col-12">
					<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<center>
								<li>&copy; <?php echo "$NServer"; ?> || Todos los derechos reservados.</li>
							</center>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>