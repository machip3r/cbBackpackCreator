<?php
	$acampar=$_POST["acampar1"];
	$acampar_e2=$_POST["acampar2"];
	$equipaje=$_POST["equipaje"];
	$escolar=$_POST["escolar"];
	$nino=$_POST["nino"];
	$llavero=$_POST["llavero"];
	$pin=$_POST["pin"];
?>

<!DOCTYPE html>
<html>
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
	<title>¡Tu mochila!</title>
</head>
<body>
	<div class="contact1">
		<div class="container-contact1">
			<br>
			<div id="container-finish">
				<span class="contact1-form-title">
					Esta es tu mochila
				</span>
				<table cellpadding="10" cellspacing="0" id="table-finish">
					<tr>
						<?php
							if ($acampar=='' && $acampar_e2=='' && $equipaje=='' && $escolar=='' && $nino=='') {
								echo "<td><span class='contact1-form-title'>s/mochila</span></td>";
							} elseif ($acampar_e2=='' && $equipaje=='' && $escolar=='' && $nino=='') { 
								echo "<td><img src='img/$acampar.jpg' width='150px'></td>";
							} elseif ($acampar=='' && $equipaje=='' && $escolar=='' && $nino=='') { 
								echo "<td><img src='img/$acampar_e2.jpg' width='150px'></td>";
							} elseif ($acampar=='' && $acampar_e2=='' && $escolar=='' && $nino=='') { 
								echo "<td><img src='img/$equipaje.jpg' width='150px'></td>";
							} elseif ($acampar=='' && $acampar_e2=='' && $equipaje=='' && $nino=='') { 
								echo "<td><img src='img/$escolar.jpg' width='150px'></td>";
							} elseif ($acampar=='' && $acampar_e2=='' && $equipaje=='' && $escolar=='') { 
								echo "<td><img src='img/$nino.jpg' width='150px'></td>";
							}
						?>
						<td><span class="contact1-form-title">+</span></td><td><?php if ($llavero!='') { echo "<img src='img/$llavero.jpg' width='200px'>"; } else { echo "<span class='contact1-form-title'>s/llavero</span>"; } ?></td><td><span class="contact1-form-title">+</span></td><td><?php if ($pin!='') { echo "<img src='img/$pin.jpg' width='200px'>"; } else { echo "<span class='contact1-form-title'>s/pin</span>"; } ?></td>
					</tr>
					<tr>
						<td><span class="contact1-form-title">Mochila</span></td><td></td><td><span class="contact1-form-title">Llavero</span></td><td></td><td><span class="contact1-form-title">Pin</span></td>
					</tr>
				</table>
			</div>
			<div class="container-contact1-form-btn">
				<a class="contact1-form-btn" href="index.php">
					<span>
						Crear una nueva
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</span>
				</a>
			</div>
		</div>
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