<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>BackPack Creator</title>
</head>
<body>
	<div class="contact1">
		<form action="producto.php" method="POST">
			<!-- INICIO -->
			<div class="container-contact1">
				<div class="contact1-pic js-tilt" data-tilt>
					<img src="img/girl_backpack1x1.jpg" alt="IMG" id="gbp">
				</div>

				<div id="title-banner">
					<br>
					<br>
					<span class="contact1-form-title" style="color:white">
						Bienvenido a BackPack Creator
					</span>
				</div>
				<br>
				<span id="phrase">
					<b>Aquí mismo puedes crear una mochila perfecta para tu estilo y sentirte cómodo con ella.</b>
				</span>
				<br>
				<br>
				<br>
				<div class="container-contact1-form-btn">
					<a class="contact1-form-btn" href="#tipo">
						<span>
							Empezar ahora
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</a>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!-- TIPO MOCHILA -->
			<div class="contact1" id="tipo">
				<div class="container-contact1">
					<div id="container-type">
						<span class="contact1-form-title">
							¿Qué tipo de mochila prefieres?
						</span>
						<table cellpadding="10" cellspacing="0" id="table-type">
							<tr>
								<td><img src="img/acampar_negra.jpg" width="150px"><br><a class="btn green" href="#estilo_acampar">Acampar</a></td><td><img src="img/equipaje.jpg" width="150px"><br><a class="btn green" href="#mochila_equipaje">Equipaje</a></td>
							</tr>
							<tr>
								<td><img src="img/escolar.jpg" width="150px"><br><a class="btn green" href="#mochila_escolar">Escolar</a></td><td><img src="img/ninos.jpg" width="150px"><br><a class="btn green" href="#mochila_ninos">Niños</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!-- ACAMPAR -->
			<div class="contact1" id="estilo_acampar">
				<div class="container-contact1">
					<span class="contact1-form-title">
						Elige un estilo
					</span>
					<table cellpadding="10" cellspacing="0" id="table-style">
						<tr>
							<td><img src="img/acampar.jpg" width="200px"><br><a class="btn green" href="#mochila_acampar">1</a></td><td><img src="img/acampar2.jpg" width="250px"><br><br><br><br><a class="btn green" href="#mochila_acampar2">2</a></td>
						</tr>
					</table>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="contact1" id="mochila_acampar">
				<div class="container-contact1">
					<div class="contact1-pic js-tilt" data-tilt>
						<img src="img/acampar.jpg" alt="IMG">
					</div>

					<span class="contact1-form-title">
						Escoge tu color preferido
					</span>
					<br>
					<div class="wrap-input1 validate-input" data-validate = "acampar">
						<select name="acampar1" class="input1">
							<option value="">Ninguno</option>
							<option value="acampar_negra">Negra</option>
							<option value="acampar_verde">Verde</option>
							<option value="acampar_roja">Roja</option>
							<option value="acampar_morada">Morada</option>
							<option value="acampar_azul">Azul</option>
						</select>
					</div>
					<div class="container-contact1-form-btn">
						<a class="contact1-form-btn" href="#mochila_llavero">
							<span>
								Siguiente
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="contact1" id="mochila_acampar2">
				<div class="container-contact1">
					<div class="contact1-pic js-tilt" data-tilt>
						<img src="img/acampar2.jpg" alt="IMG">
					</div>

					<span class="contact1-form-title">
						Escoge tu color preferido
					</span>
					<br>
					<div class="wrap-input1 validate-input" data-validate = "acampar2">
						<select name="acampar2" class="input1">
							<option value="">Ninguno</option>
							<option value="acampar_e2_negra">Negra</option>
							<option value="acampar_e2_militar">Camuflaje</option>
							<option value="acampar_e2_verde">Verde</option>
						</select>
					</div>
					<div class="container-contact1-form-btn">
						<a class="contact1-form-btn" href="#mochila_llavero">
							<span>
								Siguiente
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!-- ESCOLAR -->
			<div class="contact1" id="mochila_escolar">
				<div class="container-contact1">
					<div id="container-type">

						<span class="contact1-form-title">
							Escoge tu favorita
						</span>
						<table cellpadding="10" cellspacing="0" id="table-escolar">
							<tr>
								<td><img src="img/escolar_1.jpg" width="150px"><br><span>1</span></td><td><img src="img/escolar_2.jpg" width="150px"><br><span>2</span></td><td><img src="img/escolar_3.jpg" width="150px"><br><span>3</span></td><td><img src="img/escolar_4.jpg" width="100px"><br><span>4</span></td><td><img src="img/escolar_5.jpg" width="130px"><br><span>5</span></td>
							</tr>
							<tr>
								<td><img src="img/escolar_6.jpg" width="150px"><br><span>6</span></td><td><img src="img/escolar_7.jpg" width="150px"><br><span>7</span></td><td><img src="img/escolar_8.jpg" width="100px"><br><span>8</span></td><td><img src="img/escolar_9.jpg" width="150px"><br><span>9</span></td><td><img src="img/escolar_10.jpg" width="150px"><br><span>10</span></a></td>
							</tr>
						</table>
						<div class="wrap-input1 validate-input" data-validate = "escolar">
							<select name="escolar" class="input1">
								<option value="">Ninguno</option>
								<option value="escolar_1">1</option>
								<option value="escolar_2">2</option>
								<option value="escolar_3">3</option>
								<option value="escolar_4">4</option>
								<option value="escolar_5">5</option>
								<option value="escolar_6">6</option>
								<option value="escolar_7">7</option>
								<option value="escolar_8">8</option>
								<option value="escolar_9">9</option>
								<option value="escolar_10">10</option>
							</select>
							<span class="shadow-input1"></span>
						</div>
					</div>
					<div class="container-contact1-form-btn">
						<a class="contact1-form-btn" href="#mochila_llavero">
							<span>
								Siguiente
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!-- EQUIPAJE -->
			<div class="contact1" id="mochila_equipaje">
				<div class="container-contact1">
					<div id="container-type">

						<span class="contact1-form-title">
							Escoge tu favorita
						</span>
						<table cellpadding="10" cellspacing="0" id="table-equipaje">
							<tr>
								<td><img src="img/equipaje_1.jpg" width="150px"><br><span>1</span></td><td><img src="img/equipaje_2.jpg" width="150px"><br><span>2</span></td><td><img src="img/equipaje_3.jpg" width="150px"><br><span>3</span></td><td><img src="img/equipaje_4.jpg" width="150px"><br><span>4</span></td><td><img src="img/equipaje_5.jpg" width="130px"><br><span>5</span></td>
							</tr>
							<tr>
								<td><img src="img/equipaje_6.jpg" width="150px"><br><span>6</span></td><td><img src="img/equipaje_7.jpg" width="150px"><br><span>7</span></td><td><img src="img/equipaje_8.jpg" width="150px"><br><span>8</span></td><td><img src="img/equipaje_9.jpg" width="150px"><br><span>9</span></td><td><img src="img/equipaje_10.jpg" width="150px"><br><span>10</span></a></td>
							</tr>
						</table>
						<div class="wrap-input1 validate-input" data-validate = "equipaje">
							<select name="equipaje" class="input1">
								<option value="">Ninguno</option>
								<option value="equipaje_1">1</option>
								<option value="equipaje_2">2</option>
								<option value="equipaje_3">3</option>
								<option value="equipaje_4">4</option>
								<option value="equipaje_5">5</option>
								<option value="equipaje_6">6</option>
								<option value="equipaje_7">7</option>
								<option value="equipaje_8">8</option>
								<option value="equipaje_9">9</option>
								<option value="equipaje_10">10</option>
							</select>
							<span class="shadow-input1"></span>
						</div>
					</div>
					<div class="container-contact1-form-btn">
						<a class="contact1-form-btn" href="#mochila_llavero">
							<span>
								Siguiente
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!-- NIÑOS -->
			<div class="contact1" id="mochila_ninos">
				<div class="container-contact1">
					<div id="container-type">

						<span class="contact1-form-title">
							Escoge tu favorita
						</span>
						<table cellpadding="10" cellspacing="0" id="table-nino">
							<tr>
								<td><img src="img/nino_1.jpg" width="150px"><br><span>1</span></td><td><img src="img/nino_2.jpg" width="150px"><br><span>2</span></td><td><img src="img/nino_3.jpg" width="150px"><br><span>3</span></td><td><img src="img/nino_4.jpg" width="150px"><br><span>4</span></td><td><img src="img/nino_5.jpg" width="150px"><br><span>5</span></td>
							</tr>
							<tr>
								<td><img src="img/nino_6.jpg" width="150px"><br><span>6</span></td><td><img src="img/nino_7.jpg" width="150px"><br><span>7</span></td><td><img src="img/nino_8.jpg" width="150px"><br><span>8</span></td><td><img src="img/nino_9.jpg" width="150px"><br><span>9</span></td><td><img src="img/nino_10.jpg" width="150px"><br><span>10</span></a></td>
							</tr>
						</table>
						<div class="wrap-input1 validate-input" data-validate = "nino">
							<select name="nino" class="input1">
								<option value="">Ninguno</option>
								<option value="nino_1">1</option>
								<option value="nino_2">2</option>
								<option value="nino_3">3</option>
								<option value="nino_4">4</option>
								<option value="nino_5">5</option>
								<option value="nino_6">6</option>
								<option value="nino_7">7</option>
								<option value="nino_8">8</option>
								<option value="nino_9">9</option>
								<option value="nino_10">10</option>
							</select>
							<span class="shadow-input1"></span>
						</div>
					</div>
					<div class="container-contact1-form-btn">
						<a class="contact1-form-btn" href="#mochila_llavero">
							<span>
								Siguiente
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!-- LLAVERO -->
			<div class="contact1" id="mochila_llavero">
				<div class="container-contact1">

					<span class="contact1-form-title" style="margin-top:-20px;">
						Elige algún llavero que desees
					</span>
					<table cellpadding="10" cellspacing="0" id="table-llavero">
							<tr>
								<td><img src="img/llavero_1.jpg" width="70px"><br><span>1</span></td><td><img src="img/llavero_2.jpg" width="100px"><br><span>2</span></td><td><img src="img/llavero_3.jpg" width="100px"><br><span>3</span></td><td><img src="img/llavero_4.jpg" width="100px"><br><span>4</span></td><td><img src="img/llavero_5.jpg" width="80px"><br><span>5</span></td>
							</tr>
							<tr>
								<td><img src="img/llavero_6.jpg" width="100px"><br><span>6</span></td><td><img src="img/llavero_7.jpg" width="100px"><br><span>7</span></td><td><img src="img/llavero_8.jpg" width="100px"><br><span>8</span></td><td><img src="img/llavero_9.jpg" width="100px"><br><span>9</span></td><td><img src="img/llavero_10.jpg" width="100px"><br><span>10</span></a></td>
							</tr>
						</table>
					<div class="wrap-input1 validate-input" data-validate = "llavero">
						<select name="llavero" class="input1">
							<option value="">Ninguno</option>
							<option value="llavero_1">1</option>
							<option value="llavero_2">2</option>
							<option value="llavero_3">3</option>
							<option value="llavero_4">4</option>
							<option value="llavero_5">5</option>
							<option value="llavero_6">6</option>
							<option value="llavero_7">7</option>
							<option value="llavero_8">8</option>
							<option value="llavero_9">9</option>
							<option value="llavero_10">10</option>
						</select>
					</div>
					<div class="container-contact1-form-btn">
						<a class="contact1-form-btn" href="#mochila_pin">
							<span>
								Siguiente
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!-- PIN -->
			<div class="contact1" id="mochila_pin">
				<div class="container-contact1">

					<span class="contact1-form-title" style="margin-top:-20px;">
						Elige algún pin que desees
					</span>
					<table cellpadding="10" cellspacing="0" id="table-pin">
						<tr>
							<td><img src="img/pin_1.jpg" width="150px"><br><span>1</span></td><td><img src="img/pin_2.jpg" width="150px"><br><span>2</span></td><td><img src="img/pin_3.jpg" width="150px"><br><span>3</span></td><td><img src="img/pin_4.jpg" width="150px"><br><span>4</span></td><td><img src="img/pin_5.jpg" width="150px"><br><span>5</span></td>
						</tr>
						<tr>
							<td><img src="img/pin_6.jpg" width="150px"><br><span>6</span></td><td><img src="img/pin_7.jpg" width="150px"><br><span>7</span></td><td><img src="img/pin_8.jpg" width="150px"><br><span>8</span></td><td><img src="img/pin_9.jpg" width="150px"><br><span>9</span></td><td><img src="img/pin_10.jpg" width="150px"><br><span>10</span></a></td>
						</tr>
					</table>
					<div class="wrap-input1 validate-input" data-validate = "pin">
						<select name="pin" class="input1">
							<option value="">Ninguno</option>
							<option value="pin_1">1</option>
							<option value="pin_2">2</option>
							<option value="pin_3">3</option>
							<option value="pin_4">4</option>
							<option value="pin_5">5</option>
							<option value="pin_6">6</option>
							<option value="pin_7">7</option>
							<option value="pin_8">8</option>
							<option value="pin_9">9</option>
							<option value="pin_10">10</option>
						</select>
					</div>
					<div class="container-contact1-form-btn">
						<button class="contact1-form-btn">
							<span>
								Crear mochila
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br>
		</form>
	</div>
</body>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script
	<script src="vendor/select2/select2.min.js"></script
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-23581568-13');
	</script>
	<script src="js/main.js"></script>
</html>
